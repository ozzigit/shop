document.addEventListener("DOMContentLoaded", function () {
    var map = new jsVectorMap({
        map: "world",
        selector: "#world_map",
        zoomButtons: true,
        selectedRegions: ["US", "SA", "DE", "FR", "CN", "AU", "BR", "IN", "GB"],
        regionStyle: {
            initial: {
                fill: "#e4e4e4",
                "fill-opacity": 0.9,
                stroke: "none",
                "stroke-width": 0,
                "stroke-opacity": 0,
            },
            selected: {
                fill: window.theme.primary,
            },
        },
        zoomOnScroll: false,
    });
    window.addEventListener("resize", () => {
        map.updateSize();
    });
    setTimeout(function () {
        map.updateSize();
    }, 250);
});
