// Hamburger menu
window.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.menu_hamburger');
    const menu = document.querySelector('.menu');

    hamburger?.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('menu_active');
    });

    document.querySelectorAll('.menu_item').forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger_active');
        });
    });
});

// Catalog photo switcher (houses / baths / maf)
// Buttons: .{prefix}{n}_button{m}, Photos: .{photoPrefix}_{n}_{m}
function initPhotoSwitcher(prefix, photoPrefix, maxItems) {
    for (let n = 1; n <= maxItems; n++) {
        const buttons = Array.from(document.querySelectorAll(`[class*="${prefix}${n}_button"]`));
        const photos  = Array.from(document.querySelectorAll(`[class*="${photoPrefix}_${n}_"]`));
        if (!buttons.length) continue;
        buttons.forEach((btn, idx) => {
            btn.addEventListener('click', () => {
                buttons.forEach((b, i) => {
                    b.classList.toggle('active_houses_block_foto', i === idx);
                    b.classList.toggle('non_active_houses_block_foto', i !== idx);
                });
                photos.forEach((p, i) => {
                    p.classList.toggle('houses_block_foto_active', i === idx);
                });
            });
        });
    }
}

initPhotoSwitcher('houses', 'houses_block_foto', 8);
initPhotoSwitcher('baths', 'baths_block_foto', 8);
initPhotoSwitcher('maf', 'maf_block_foto', 5);

// форма заявки / обратного звонка (единый попап)
const formOrderCall      = document.querySelector('.popup_order_call');
const formOrderCallBg    = document.querySelector('.gray_background_footer_2');
const formOrderCallClose = document.querySelector('.window_close_footer');

function openOrderCallPopup(title, source) {
    if (!formOrderCall) return;
    document.getElementById('popup_order_call_title').textContent = title;
    document.getElementById('popup_source').value = source;
    formOrderCall.classList.add('active_form');
    formOrderCallBg?.classList.remove('form_hidden');
}

function closeOrderCallPopup() {
    if (!formOrderCall) return;
    formOrderCall.classList.remove('active_form');
    formOrderCallBg?.classList.add('form_hidden');
}

document.querySelectorAll('.ordering_call_first, .ordering_call_2').forEach(btn => {
    btn.addEventListener('click', () => openOrderCallPopup('Заказать обратный звонок', 'Заказать обратный звонок'));
});

document.querySelectorAll('[class*="project_calculation"]').forEach(btn => {
    btn.addEventListener('click', () => openOrderCallPopup('Заявка на бесплатный обмер и расчет проекта под ключ', 'Заявка на расчёт проекта'));
});

formOrderCallBg?.addEventListener('click', closeOrderCallPopup);
formOrderCallClose?.addEventListener('click', closeOrderCallPopup);

// Catalog popups (houses / baths / MAF)
const catalogBg = document.querySelector('.gray_background_footer_3');
const catalogPopups = [
    document.querySelector('.popup_order_call_container_projects'),
    document.querySelector('.popup_order_call_container_projects2'),
    document.querySelector('.popup_order_call_container_projects3'),
];

function scrollToTop() {
    window.scrollTo({ top: 0 });
}

function openCatalogPopup(index) {
    catalogPopups.forEach((p, i) => p?.classList.toggle('active_form', i === index));
    catalogBg?.classList.remove('form_hidden');
    scrollToTop();
}

function closeCatalogPopup() {
    catalogPopups.forEach(p => p?.classList.remove('active_form'));
    catalogBg?.classList.add('form_hidden');
    scrollToTop();
}

// Open buttons: project_open (houses), project_open2 (baths), project_open3 (maf)
['.project_open', '.project_open2', '.project_open3'].forEach((cls, i) => {
    document.querySelector(cls)?.addEventListener('click', () => openCatalogPopup(i));
});

// Switch buttons inside catalog popups
const catalogSwitchMap = {
    '.project_open4': 1,
    '.project_open5': 2,
    '.project_open6': 0,
    '.project_open7': 2,
    '.project_open8': 0,
    '.project_open9': 1,
};
Object.entries(catalogSwitchMap).forEach(([cls, idx]) => {
    document.querySelector(cls)?.addEventListener('click', () => openCatalogPopup(idx));
});

// Close buttons
['.window_close_footer_4', '.window_close_footer_5', '.window_close_footer_6'].forEach(cls => {
    document.querySelector(cls)?.addEventListener('click', closeCatalogPopup);
});
catalogBg?.addEventListener('click', closeCatalogPopup);

// Scroll to element with offset (used by SPB single-page nav)
function scrollToElementWithOffset(targetClass, offset) {
    const el = document.querySelector(`.${targetClass}`);
    if (!el) return;
    window.scrollTo({
        top: el.getBoundingClientRect().top + window.pageYOffset + offset,
        behavior: 'smooth',
    });
}

// Desktop sidebar scroll nav (SPB variant)
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.scrollButtonDesktop[data-target-desktop]').forEach(item => {
        item.addEventListener('click', () => {
            const targetClass = item.getAttribute('data-target-desktop');
            const offset = parseInt(item.getAttribute('data-offset-desktop'), 10);
            if (!isNaN(offset)) scrollToElementWithOffset(targetClass, offset);
        });
    });
});

// Mobile hamburger scroll nav (SPB variant)
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.menu_hamburger');
    const menu = document.querySelector('.menu');

    document.querySelectorAll('.scrollButtonMobile[data-target-mobile]').forEach(item => {
        item.addEventListener('click', () => {
            const targetClass = item.getAttribute('data-target-mobile');
            const offset = parseInt(item.getAttribute('data-offset-mobile'), 10);
            if (!isNaN(offset)) {
                hamburger?.classList.remove('hamburger_active');
                menu?.classList.add('menu_active');
                scrollToElementWithOffset(targetClass, offset);
            }
        });
    });
});

// Active link highlighting in sidebar and hamburger menu
document.addEventListener('DOMContentLoaded', function() {
    const currentPath = window.location.pathname;
    const isCatalogSubpage = currentPath === '/catalog-bani' || currentPath === '/catalog-besedki';

    document.querySelectorAll('.nav_logo_and_links_list_link, .header_logo_and_links_list_link').forEach(link => {
        if (
            link.getAttribute('href') === currentPath ||
            (isCatalogSubpage && link.getAttribute('href') === '/catalog-domov')
        ) {
            link.classList.add('opasity_link');
        }
    });
});
