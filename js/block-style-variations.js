jQuery(document).ready(function($) {

    // Add 'Rounded Corners' style to Image blocks
    wp.blocks.registerBlockStyle("core/image", {
        name: "roundedcorners",
        label: "Small Rounded Corners"
    });

    // Add 'Rounded Corners' style to GB Advanced Columns blocks
    wp.blocks.registerBlockStyle("genesis-blocks/gb-columns", {
        name: "roundedcorners",
        label: "Rounded Corners"
    });

});
