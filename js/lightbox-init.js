(() => {
    class LightboxManager {
        static init() {
            if (!window.Fancybox || typeof window.Fancybox.bind !== "function") {
                return;
            }

            // Single global lightbox setup for all sections using data-fancybox.
            window.Fancybox.bind("[data-fancybox]", {
                Thumbs: {
                    autoStart: false
                },
                Toolbar: {
                    display: {
                        left: ["infobar"],
                        middle: [],
                        right: ["slideshow", "fullscreen", "thumbs", "close"]
                    }
                }
            });
        }
    }

    window.addEventListener("DOMContentLoaded", () => {
        LightboxManager.init();
    });
})();
