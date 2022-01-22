/*
	Minified home.js
	Last Modified: Fri, 29 Oct 2021 14:40:46 GMT
*/
var isSafari = window.safari !== undefined;
if (isSafari) {
    $("#home-hero").addClass("safari");
}
var windowsize = window.innerWidth;
window.addEventListener("resize", function (event) {
    windowsize = window.innerWidth;
});
var _AutofillCallbackHandler = function () {};
function StandardNotation(number) {
    var e = !isNaN(number) ? parseInt(number.toString().split("+")[1]) : 0;
    if (e > 20) {
        e -= 20;
        number /= Math.pow(10, e);
        number += new Array(e + 1).join("0");
    }
    return number;
}
var canvas_home = $("#canvas-home");
var canvasID = canvas_home.attr("id");
var canvasSKU = StandardNotation(canvas_home.data("sku"));
var canvasImageURL = canvas_home.data("image");
var canvasQuality = canvas_home.data("quality");
function removeRenderedClasses() {
    $("#canvas-home").removeClass("rendered");
}
function defaultFrameRender() {
    if (canvasID == "canvas-home" && canvasSKU == "26071203020801000000000000000") {
        var default_image = new Image();
        default_image.src = SITE_URL + "/images/frame-preview/default.png";
        var default_canvas_wrapper = document.getElementById(canvasID);
        default_canvas_wrapper.appendChild(default_image);
        default_canvas_wrapper.classList.add("shadow");
        return true;
    }
    drawFrame(canvasID, canvasSKU, canvasImageURL, canvasQuality);
    var size_tab = $("div[data-tab-name=size]");
    var new_width_int = parseInt(size_tab.find(".width-int").val());
    var new_width_frac = size_tab.find(".width-frac").val();
    var new_height_int = parseInt(size_tab.find(".height-int").val());
    var new_height_frac = size_tab.find(".height-frac").val();
    updateSessionFramePreviewParameters({ width_int: new_width_int, width_frac: new_width_frac, height_int: new_height_int, height_frac: new_height_frac });
}
defaultFrameRender();
function selectTab(name) {
    var $current_data_tab = $(".tab-box.frame-preview .tabs").find(".tab.active");
    var $tab_name = $current_data_tab.data("tab-name");
    if ($tab_name !== name) {
        $('.tab-box.frame-preview .tab-content[data-tab-name="' + $tab_name + '"]').slideUp("fast");
        $('.tab-box.frame-preview .tab[data-tab-name="' + $tab_name + '"]').removeClass("active");
        $('.tab-box.frame-preview .tab[data-tab-name="' + name + '"]').addClass("active");
        $('.tab-box.frame-preview .tab[data-tab-name="' + name + '"]').addClass("visited");
        $('.tab-box.frame-preview .tab-content[data-tab-name="' + name + '"]').slideDown("fast");
    } else {
        $('.tab-box.frame-preview .tab-content[data-tab-name="' + $tab_name + '"]').slideUp("fast");
        $('.tab-box.frame-preview .tab[data-tab-name="' + $tab_name + '"]').removeClass("active");
    }
    $(".tab-box.frame-preview .tab-content[data-tab-name=" + name + "]")
        .find("img")
        .each(function () {
            var data_src = $(this).attr("data-src");
            if (typeof data_src !== typeof undefined && data_src !== false) {
                $(this).attr("src", $(this).data("src"));
                $(this).removeAttr("data-src");
            }
        });
    sessionSelectTab(name);
}
function sessionSelectTab(name) {
    $.ajax({ type: "POST", url: SITE_URL + "/ajax.php", dataType: "json", timeout: 5000, data: { action: "session_select_tab", name: name }, success: function () {} });
}
$(document).ready(function () {
    $("ul.profile-button-group li").click(function () {
        if (!$(this).hasClass("active")) {
            $("ul.profile-button-group li").removeClass("active");
            $(this).addClass("active");
            var profile_materials = $("ul.profile-button-group li.active").attr("data-profile-materials");
            $(".profile-box").each(function (i) {
                $(this).show();
                if (profile_materials !== "All") {
                    if ($(this).attr("data-profile-materials") !== profile_materials) {
                        $(this).hide();
                    }
                }
            });
        }
    });
});
function displayFramePreviewNotification(messages, message_bullet) {
    var close_notification = '<div class="close-notification"><i class="fas fa-times" aria-hidden="true"></i></div>';
    var close_button = '<div class="close-notification-button"><div class="btn btn-sky">Got it!</div></div>';
    if (!message_bullet == false) {
        if (messages.length == 1) {
            var text = "We've made a change for you:<br><ul>";
            for (var i = 0; i < messages.length; i++) {
                text += "<li>" + messages[i] + "</li>";
            }
            text += "</ul>";
            $(".frame-preview-notification-text").html(close_notification + text + close_button);
        } else {
            var text = "We've made a few changes for you:<br><ul>";
            for (var i = 0; i < messages.length; i++) {
                text += "<li>" + messages[i] + "</li>";
            }
            text += "</ul>";
            $(".frame-preview-notification-text").html(close_notification + text + close_button);
        }
    } else {
        $(".frame-preview-notification-text").html(close_notification + messages[0] + close_button);
    }
    $(".frame-preview-notification").fadeTo(250, 1);
}
$(document).ready(function () {
    $(".frame-preview-notification").on("click", ".close-notification", function () {
        $(".frame-preview-notification").fadeOut(150);
    });
    $(".frame-preview-notification").on("click", ".close-notification-button", function () {
        $(".frame-preview-notification").fadeOut(150);
    });
});
function framePreviewUpdateText() {
    $.ajax({
        type: "POST",
        url: SITE_URL + "/ajax.php",
        dataType: "json",
        timeout: 5000,
        data: { action: "frame_preview_get_text" },
        success: function (result) {
            if (result.frame_preview_text.dpi == 0) {
                result.frame_preview_text.dpi = "Custom";
            }
            $(".your-frame-wrapper .size-text").html(result.frame_preview_text.size);
            $(".tab-content[data-tab-name=size] .size-text").html(result.frame_preview_text.size);
            $("#print-modal .size-text").html(result.frame_preview_text.size);
            $(".tab-content[data-tab-name=size] .dpi-text").html(result.frame_preview_text.dpi);
            $("#print-modal .dpi-text").html(result.frame_preview_text.dpi);
            updateDpiSliderColor();
            $(".your-frame-wrapper .style-text").html(result.frame_preview_text.style);
            $(".your-frame-wrapper .color-text").html(result.frame_preview_text.color);
            if (result.frame_preview_text.outer_mat) {
                $(".your-frame-wrapper .single-mat .matting-text").html(result.frame_preview_text.outer_mat);
            } else {
                $(".your-frame-wrapper .single-mat .matting-text").html("None");
            }
            $(".your-frame-wrapper .double-mat.outer .matting-text").html(result.frame_preview_text.outer_mat);
            $(".your-frame-wrapper .double-mat.inner .matting-text").html(result.frame_preview_text.inner_mat);
            var new_art_size_popover_data =
                "<p>The outside measurements of your frame will be <span class='outside-measurements-width'>" +
                result.frame_preview_text.outside_dimensions_width +
                "</span> x <span class='outside-measurements-height'>" +
                result.frame_preview_text.outside_dimensions_height +
                "</span>, and it will be <span class='outside-measurements-depth'>" +
                result.frame_preview_text.outside_dimensions_depth +
                '</span> deep.</p><p>Your artwork will be covered by 1/4&quot; on each side. This is to hold the art in place, or prevent it from "falling through" the matboard.</p>';
            $(".your-frame-wrapper #art-size-popover, #art-size-popover-mobile").attr("data-content", new_art_size_popover_data).data("bs.popover").setContent();
            $(".mat-design-input[data-mat=outer]").html('<i class="fas fa-th" aria-hidden="true"></i>' + result.frame_preview_text.outer_mat_design + "<br>(" + result.frame_preview_text.outer_mat_type + ")");
            $(".outer-mat-options .width-int").val(result.frame_preview_text.outer_mat_int);
            $(".outer-mat-options .width-frac").val(result.frame_preview_text.outer_mat_frac);
            $(".mat-design-input[data-mat=inner]").html('<i class="fas fa-th" aria-hidden="true"></i>' + result.frame_preview_text.inner_mat_design + "<br>(" + result.frame_preview_text.inner_mat_type + ")");
            $(".inner-mat-options .width-int").val(result.frame_preview_text.inner_mat_int);
            $(".inner-mat-options .width-frac").val(result.frame_preview_text.inner_mat_frac);
            $(".your-frame-wrapper .cover-text").html(result.frame_preview_text.cover);
            $(".your-frame-wrapper .backing-text").html(result.frame_preview_text.backing);
            $(".your-frame-wrapper .price-text").html(result.frame_preview_text.price);
            $(".tab-content[data-tab-name=size] .width-int").val(result.frame_preview_text.width_int);
            $(".tab-content[data-tab-name=size] .width-frac").val(result.frame_preview_text.width_frac);
            $(".tab-content[data-tab-name=size] .height-int").val(result.frame_preview_text.height_int);
            $(".tab-content[data-tab-name=size] .height-frac").val(result.frame_preview_text.height_frac);
            $(".print-size-slider").slider("option", "value", result.frame_preview_text.print_scale);
            getNewSKU();
        },
    });
}
$(document).ready(function () {
    var data_color_id = $(".profile-box.active").data("color-id");
    $(".profile-box.active .profile-color-list")
        .find('.color-choice[data-color-id="' + data_color_id + '"]')
        .addClass("active");
});
var percentColors = [
    { pct: 0.0, color: { r: 0xff, g: 0x00, b: 0 } },
    { pct: 0.5, color: { r: 0xff, g: 0xff, b: 0 } },
    { pct: 1.0, color: { r: 0x00, g: 0xff, b: 0 } },
];
function updateDpiSliderColor() {
    var current_dpi = Number($(".tab-content[data-tab-name=size] .dpi-text").html());
    var slider_color = "#5cb85c";
    if (current_dpi >= 150 && current_dpi < 300) {
        slider_color = "#a2d441";
    }
    if (current_dpi >= 100 && current_dpi < 150) {
        slider_color = "#dce310";
    }
    $(".print-size-slider.ui-widget-content .ui-state-default").css("background-color", slider_color);
}
function getCurrentArtFilename() {
    var msgContent = '<div id="upload-msg"><div class="msg-wrapper"><h5>Your Existing Artwork</h5><span class="upload-text-two">Or upload your image for printing<i class="far fa-cloud-upload" aria-hidden="true"></i></span></div></div>';
    if (!$("#the-frame-builder #upload-msg").length) {
        $(".inner-mat .artwork").append(msgContent);
    }
    var artwork = $(".inner-mat .artwork"),
        fileURL = artwork.find(".uploaded-art img").attr("src"),
        filename = fileURL.substr(fileURL.lastIndexOf("/") + 1).slice(0, -4),
        uploadMsg = $("#upload-msg .msg-wrapper");
    if (filename == "no-image") {
        var artWidth = artwork.width(),
            artHeight = artwork.height();
        if (!$("#upload-msg").length) {
            $(".inner-mat .artwork").append(msgContent);
        }
        uploadMsg.width(artWidth).height(artHeight).show();
    } else {
        uploadMsg.hide();
    }
}
function getNewSKU() {
    removeRenderedClasses();
    $.ajax({
        type: "POST",
        url: SITE_URL + "/ajax.php",
        dataType: "json",
        timeout: 5000,
        data: { action: "load_frame_preview_get_text" },
        success: function (result) {
            canvasID = canvas_home.attr("id");
            canvasSKU = StandardNotation(result["sku"]);
            canvasImageURL = result["image_url"];
            canvasQuality = canvas_home.attr("data-quality");
            canvas_home.attr("data-sku", result["sku"]);
            canvas_home.attr("data-image", result["image_url"]);
            drawFrame(canvasID, canvasSKU, canvasImageURL, canvasQuality);
        },
    });
}
function updateSessionFramePreviewParameters(parameters) {
    $.ajax({
        type: "POST",
        url: SITE_URL + "/ajax.php",
        dataType: "json",
        timeout: 5000,
        data: { action: "update_session_frame_preview_parameters", parameters: parameters, force_small: force_small_print_upon_upload },
        success: function (result) {
            var messages = [],
                no_change = false;
            if (result.exceeded_max_dimensions) {
                messages.push('<b>Size kept the same:</b> We can make a frame for any art up to 42" x 62".');
                no_change = true;
            }
            if (result.exceeded_max_print_size) {
                messages.push(
                    '<b>Size kept the same:</b> You have picked a size that is larger than we can print your image with acceptable quality. You can choose a higher-resolution image to print larger, or use the slider next to your image to print this image as large as possible. Please be sure to <a href="contact">contact us</a> if you need help or have any questions.'
                );
                no_change = true;
            }
            if (result.matting_removed_automatically) {
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile").removeClass("active");
                if ($(".tab-box.frame-preview .tab-content[data-tab-name=matting]").is(":visible")) {
                    $(".tab-box.frame-preview .tab-content[data-tab-name=matting]").find(".mat-options").slideUp();
                } else {
                    $(".tab-box.frame-preview .tab-content[data-tab-name=matting]").find(".mat-options").hide();
                }
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile[data-mat-quantity=0]").addClass("active");
                $("#the-frame-builder .your-frame-line-item.single-mat").hide();
                messages.push('<b>Matting removed:</b> To mat your art, art <u>plus matting</u> must be 32" x 40" or smaller.');
                selectNoMatting();
            }
            if (result.inner_mat_zero) {
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile").removeClass("active");
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile .mat-options").slideUp();
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile[data-mat-quantity=1]").addClass("active");
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile[data-mat-quantity=1] .mat-options").slideDown();
            }
            if (result.art_too_large_for_matting) {
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile[data-mat-quantity=1]").addClass("disabled");
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile[data-mat-quantity=2]").addClass("disabled");
            } else {
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile[data-mat-quantity=1]").removeClass("disabled");
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile[data-mat-quantity=2]").removeClass("disabled");
            }
            if (result.too_large_matting_removed_automatically) {
                messages.push('<b>Matting removed:</b> To mat your art, it <u>plus matting</u> must be 32" x 40" or smaller.');
                selectNoMatting();
            }
            if (result.wood_frame_removed_automatically) {
                selectStyle(1, 1);
                $(".profile-box[data-profile-id=7]").addClass("disabled");
                $(".profile-box[data-profile-id=7] select.color-input").attr("disabled", "disabled");
                $(".profile-box[data-profile-id=10]").addClass("disabled");
                $(".profile-box[data-profile-id=10] select.color-input").attr("disabled", "disabled");
                $(".profile-box[data-profile-id=11]").addClass("disabled");
                $(".profile-box[data-profile-id=11] select.color-input").attr("disabled", "disabled");
                messages.push('<b>Metal style selected:</b> Wood styles are available for art <u>plus matting</u> up to 42" x 42".');
            }
            if (result.too_large_for_wood) {
                $(".profile-box[data-profile-id=7]").addClass("disabled");
                $(".profile-box[data-profile-id=7] select.color-input").attr("disabled", "disabled");
                $(".profile-box[data-profile-id=10]").addClass("disabled");
                $(".profile-box[data-profile-id=10] select.color-input").attr("disabled", "disabled");
                $(".profile-box[data-profile-id=11]").addClass("disabled");
                $(".profile-box[data-profile-id=11] select.color-input").attr("disabled", "disabled");
            } else {
                $(".profile-box[data-profile-id=7]").removeClass("disabled");
                $(".profile-box[data-profile-id=7] select.color-input").removeAttr("disabled");
                $(".profile-box[data-profile-id=10]").removeClass("disabled");
                $(".profile-box[data-profile-id=10] select.color-input").removeAttr("disabled");
                $(".profile-box[data-profile-id=11]").removeClass("disabled");
                $(".profile-box[data-profile-id=11] select.color-input").removeAttr("disabled");
            }
            if (result.backing_set_to_foamcore_automatically) {
                selectBacking(1);
                $(".acid-free-toggle").hide();
                $(".foamcore-toggle").show();
            }
            if (result.backing_set_to_acid_free_automatically) {
                selectBacking(2);
                $(".acid-free-toggle").show();
                $(".foamcore-toggle").hide();
            }
            if (result.has_print) {
                $(".acid-free-toggle").hide();
                $(".foamcore-toggle").show();
            } else {
                $(".acid-free-toggle").show();
                $(".foamcore-toggle").hide();
            }
            if (messages.length !== 0) {
                displayFramePreviewNotification(messages);
            }
            if (parameters.color_id) {
                $(".profile-color-list .color-choice.active").removeClass("active");
                $(".profile-box.active .profile-color-list")
                    .find('.color-choice[data-color-id="' + parameters.color_id + '"]')
                    .addClass("active");
            }
            framePreviewUpdateText();
        },
    });
}
function scalePrintSize(value) {
    $.ajax({
        type: "POST",
        url: SITE_URL + "/ajax.php",
        dataType: "json",
        timeout: 5000,
        data: { action: "scale_frame_preview_print_size", value: value },
        success: function (result) {
            var messages = [];
            framePreviewUpdateText();
            if (result.wood_frame_removed_automatically) {
                selectStyle(1, 1);
                $(".profile-box[data-profile-id=7]").addClass("disabled");
                $(".profile-box[data-profile-id=7] select.color-input").attr("disabled", "disabled");
                $(".profile-box[data-profile-id=10]").addClass("disabled");
                $(".profile-box[data-profile-id=10] select.color-input").attr("disabled", "disabled");
                $(".profile-box[data-profile-id=11]").addClass("disabled");
                $(".profile-box[data-profile-id=11] select.color-input").attr("disabled", "disabled");
                messages.push('<b>Metal style selected:</b> Wood styles are available for art <u>plus matting</u> up to 42" x 42".');
            } else {
                $(".profile-box[data-profile-id=7]").removeClass("disabled");
                $(".profile-box[data-profile-id=7] select.color-input").removeAttr("disabled");
                $(".profile-box[data-profile-id=10]").removeClass("disabled");
                $(".profile-box[data-profile-id=10] select.color-input").removeAttr("disabled");
                $(".profile-box[data-profile-id=11]").removeClass("disabled");
                $(".profile-box[data-profile-id=11] select.color-input").removeAttr("disabled");
            }
            if (result.art_too_large_for_matting) {
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile[data-mat-quantity=1]").addClass("disabled");
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile[data-mat-quantity=2]").addClass("disabled");
                selectNoMatting();
            } else {
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile[data-mat-quantity=1]").removeClass("disabled");
                $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile[data-mat-quantity=2]").removeClass("disabled");
            }
            if (messages.length !== 0) {
                displayFramePreviewNotification(messages);
            }
        },
    });
}
var currently_selected_color_id = false;
function selectStyle(profile_id, color_id) {
    if (color_id == -1) {
        var profile_box = $(".profile-box[data-profile-id=" + profile_id + "]");
        profile_box.find(".color-input").val(currently_selected_color_id);
        return;
    }
    currently_selected_color_id = color_id;
    $(".profile-box").removeClass("active");
    $(".profile-box .color-input").val(-1);
    $(".profile-box").each(function () {
        var reset_profile_id = $(this).data("profile-id");
        $(this)
            .find(".profile-image")
            .css("background-image", 'url("' + SITE_URL + "/images/cart/profiles/" + reset_profile_id + ".jpg?r=" + REVISION_COUNTER + '")');
    });
    var profile_box = $(".profile-box[data-profile-id=" + profile_id + "]");
    profile_box.addClass("active");
    profile_box.find(".color-input").val(color_id);
    profile_box.find(".profile-image").css("background-image", 'url("' + SITE_URL + "/images/cart/profiles/" + profile_id + "_" + color_id + ".jpg?r=" + REVISION_COUNTER + '")');
    updateSessionFramePreviewParameters({ profile_id: profile_id, color_id: color_id });
}
var waitForFinalEvent = (function () {
    var timers = {};
    return function (callback, ms, uniqueId) {
        if (!uniqueId) {
            uniqueId = "Don't call this twice without a uniqueId";
        }
        if (timers[uniqueId]) {
            clearTimeout(timers[uniqueId]);
        }
        timers[uniqueId] = setTimeout(callback, ms);
    };
})();
function highlightPreviewComponent(highlight) {
    unHighlightAllPreviewComponents();
    if (highlight == "artwork") {
        $(".frame-preview-container .artwork-overlay").css("background-color", "rgba(251, 245, 100, .5)");
    } else if (highlight == "frame") {
        $(".frame-preview-container")
            .find(".top-left-overlay, .top-center-overlay, .top-right-overlay, .middle-left-overlay, .middle-right-overlay, .bottom-left-overlay, .bottom-center-overlay, .bottom-right-overlay")
            .css("background-color", "rgba(251, 245, 100, .5)");
    } else if (highlight == "outer-mat") {
        $(".frame-preview-container").find(".outer-mat-overlay").css("background-color", "rgba(251, 245, 100, .5)");
        $(".frame-preview-container").find(".inner-mat-overlay").css("background-color", "rgba(251, 245, 100, .5)");
    } else if (highlight == "inner-mat") {
        $(".frame-preview-container").find(".inner-mat-overlay").css("background-color", "rgba(251, 245, 100, .5)");
    } else if (highlight == "cover") {
        $(".frame-preview-container").find(".outer-mat-overlay").css("background-color", "rgba(251, 245, 100, .5)");
        $(".frame-preview-container").find(".inner-mat-overlay").css("background-color", "rgba(251, 245, 100, .5)");
        $(".frame-preview-container .artwork-overlay").css("background-color", "rgba(251, 245, 100, .5)");
    }
}
function unHighlightAllPreviewComponents() {
    $(".frame-preview-container .overlay").css("background-color", "transparent");
}
$(document).ready(function () {
    $("div[data-tab-name=size] .inline-dimension-input").on("change", function () {
        $("#canvas-home").removeClass("rendered");
        var size_tab = $("div[data-tab-name=size]");
        var new_width_int = parseInt(size_tab.find(".width-int").val());
        var new_width_frac = size_tab.find(".width-frac").val();
        var new_height_int = parseInt(size_tab.find(".height-int").val());
        var new_height_frac = size_tab.find(".height-frac").val();
        updateSessionFramePreviewParameters({ width_int: new_width_int, width_frac: new_width_frac, height_int: new_height_int, height_frac: new_height_frac, dpi: "Custom" });
        $(".dpi-text").html("Custom");
    });
});
$(document).ready(function () {
    $(".button.next-step").on("click", function () {
        selectTab($(this).data("tab-name"));
    });
});
if (!detectMobile()) {
    $(".color-tooltip").tooltip();
}
function selectToolTip(color_tooltip) {
    if (color_tooltip.closest(".profile-box").hasClass("disabled")) {
        return;
    }
    if (color_tooltip.closest(".profile-box").hasClass("out-of-stock")) {
        return;
    }
    var profile_id = color_tooltip.closest(".profile-box").data("profile-id");
    var color_id = color_tooltip.data("color-id");
    selectStyle(profile_id, color_id);
}
$(document).ready(function () {
    $(".profile-box").on("click", function () {
        if ($(this).hasClass("disabled")) {
            return;
        }
        if (!$(this).hasClass("active")) {
            var this_color_tooltip = $(this).find(".profile-color-list .color-tooltip");
            var i;
            for (i = 0; i < this_color_tooltip.length; ++i) {
                var className = this_color_tooltip[i].className;
                var outOfStockBool = className.indexOf("out-of-stock");
                if (outOfStockBool == -1) {
                    var selected_tool_tip = $(this_color_tooltip[i]);
                    selectToolTip(selected_tool_tip);
                    break;
                }
            }
            return;
        }
    });
    $(".profile-color-list .color-tooltip").on("click", function () {
        var color_tooltip = $(this);
        if (!color_tooltip.hasClass("out-of-stock")) {
            selectToolTip(color_tooltip);
        }
    });
    $(".color-input").on("change", function () {
        var profile_id = $(this).closest(".profile-box").data("profile-id");
        var color_id = $(this).val();
        selectStyle(profile_id, color_id);
    });
});
$(document).ready(function () {
    var load_mat_qty = $("#matting-group .selection-tile.active").data("mat-quantity");
    if (load_mat_qty > 1) {
        $("#the-frame-builder .your-frame-wrapper .double-mat").show();
        $("#the-frame-builder .your-frame-wrapper .single-mat").hide();
    } else {
        $("#the-frame-builder .your-frame-wrapper").find(".double-mat").hide();
        $("#the-frame-builder .your-frame-wrapper").find(".single-mat").show();
    }
    $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile, #matting-group .selection-tile").on("click", function () {
        if ($(this).hasClass("disabled")) {
            return;
        }
        if ($(this).hasClass("active")) {
            return;
        }
        var matting_tab_content = $(".tab-box.frame-preview .tab-content[data-tab-name=matting]");
        var current_mat_quantity = matting_tab_content.find(".selection-tile.active").data("mat-quantity");
        var new_mat_quantity = $(this).data("mat-quantity");
        if (new_mat_quantity == "0") {
            $(".your-frame-wrapper .single-mat .matting-text").html("None");
        }
        if (new_mat_quantity > 1) {
            $("#the-frame-builder .your-frame-wrapper .double-mat").show();
            $("#the-frame-builder .your-frame-wrapper .single-mat").hide();
        } else {
            $("#the-frame-builder .your-frame-wrapper").find(".double-mat").hide();
            $("#the-frame-builder .your-frame-wrapper").find(".single-mat").show();
        }
        if ($(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile .mat-options").is(":visible")) {
            $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile .mat-options").slideUp("fast");
        } else {
            $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile .mat-options").css("display", "none");
        }
        $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile").removeClass("active");
        $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile[data-mat-quantity=" + new_mat_quantity + "]").addClass("active");
        $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile.active .mat-options").slideDown("fast");
        var outer_mat_width_int = $(this).find(".outer-mat-options .width-int option:selected").val();
        var outer_mat_width_frac = $(this).find(".outer-mat-options .width-frac option:selected").text();
        var outer_mat_total = parseInt(outer_mat_width_int) + eval(outer_mat_width_frac);
        var inner_mat_width_int = $(this).find(".inner-mat-options .width-int option:selected").val();
        var inner_mat_width_frac = $(this).find(".inner-mat-options .width-frac option:selected").text();
        var inner_mat_total = parseInt(inner_mat_width_int) + eval(inner_mat_width_frac);
        if (new_mat_quantity == 0) {
            updateSessionFramePreviewParameters({ outer_mat_type_id: 0, inner_mat_type_id: 0 });
        } else if (current_mat_quantity == 2 && new_mat_quantity == 1) {
            updateSessionFramePreviewParameters({ inner_mat_type_id: 0 });
        } else if (current_mat_quantity == 1 && new_mat_quantity == 2) {
            updateSessionFramePreviewParameters({ inner_mat_type_id: 3, inner_mat_design_id: 20, inner_mat_int: 0, inner_mat_frac: 4 });
        } else if (current_mat_quantity == 0 && new_mat_quantity == 1) {
            updateSessionFramePreviewParameters({ outer_mat_type_id: 3, outer_mat_design_id: 20, outer_mat_int: 1, outer_mat_frac: 8 });
        } else if (current_mat_quantity == 0 && new_mat_quantity == 2) {
            updateSessionFramePreviewParameters({ outer_mat_type_id: 3, outer_mat_design_id: 20, outer_mat_int: 1, outer_mat_frac: 8, inner_mat_type_id: 3, inner_mat_design_id: 20, inner_mat_int: 0, inner_mat_frac: 4 });
        }
    });
    $(".tab-box.frame-preview .tab-content[data-tab-name=matting] .selection-tile .mat-options .inline-dimension-input").on("change", function () {
        var mat = $(this).data("mat");
        var measure = $(this).data("measure");
        var value = $(this).val();
        var int_dec = parseInt($(this).closest(".row").find("select.width-int option:selected").text());
        var frac_dec = eval($(this).closest(".row").find("select.width-frac option:selected").text());
        if (mat == "outer") {
            if (measure == "int") {
                updateSessionFramePreviewParameters({ outer_mat_int: value });
            } else if (measure == "frac") {
                updateSessionFramePreviewParameters({ outer_mat_frac: value });
            }
        } else if (mat == "inner") {
            if (measure == "int") {
                updateSessionFramePreviewParameters({ inner_mat_int: value });
            } else if (measure == "frac") {
                updateSessionFramePreviewParameters({ inner_mat_frac: value });
            }
        }
    });
});
$(function () {
    $(".modal")
        .on("shown.bs.modal", function () {
            if ($(window).width() <= 768) {
                $("body").css({ position: "fixed", left: 0, right: 0 });
            }
        })
        .on("hidden.bs.modal", function () {
            $("body").css({ position: "", left: "", right: "" });
        });
    $(".modal .selection-tile").on("click", function () {
        if ($(window).width() <= 768) {
            $("body").css({ position: "fixed", left: 0, right: 0 });
        }
    });
});
function selectNoMatting() {
    var matting_tab = $(".tab-content[data-tab-name=matting]");
    matting_tab.find(".selection-tile").removeClass("active");
    matting_tab.find(".selection-tile[data-mat-quantity=0]").addClass("active");
    matting_tab.find(".mat-options").hide();
    updateSessionFramePreviewParameters({ outer_mat_visible: 0, inner_mat_visible: 0 });
}
function selectCover(cover_id_selected) {
    var cover_tab = $(".tab-content[data-tab-name=cover]");
    cover_tab.find(".selection-tile").removeClass("active");
    $("#cover-modal").find(".selection-tile").removeClass("active");
    cover_tab.find(".selection-tile[data-cover-id=" + cover_id_selected + "]").addClass("active");
    $("#cover-modal")
        .find(".selection-tile[data-cover-id=" + cover_id_selected + "]")
        .addClass("active");
    var new_cover_id = cover_tab.find(".selection-tile[data-cover-id=" + cover_id_selected + "]").data("alt-cover-id");
    updateSessionFramePreviewParameters({ cover_id: cover_id_selected });
}
$(document).ready(function () {
    $(".tab-box.frame-preview .tab-content[data-tab-name=cover] .selection-tile, #cover-modal .selection-tile").on("click", function () {
        if ($(this).hasClass("disabled")) {
            return;
        }
        var cover_id_selected = $(this).data("cover-id");
        selectCover(cover_id_selected);
    });
});
function selectBacking(backing_id) {
    updateSessionFramePreviewParameters({ backing_id: backing_id });
}
$("#frame-preview-modal").on("show.bs.modal", function () {
    removeRenderedClasses();
    profile_id = $(".profile-box.active").data("profile-id");
    color_id = $(".profile-box.active .color-tooltip.active").data("color-id");
    var canvasOldSKU = canvas_home.attr("data-sku");
    var predictedSKU = canvasOldSKU.substr(0, 2) + ("0" + profile_id).slice(-2) + ("0" + color_id).slice(-2) + canvasOldSKU.substr(6, canvasOldSKU.length);
    canvasID = "frame-preview-modal-canvas";
    canvasSKU = StandardNotation(predictedSKU);
    canvasImageURL = canvas_home.attr("data-image");
    canvasQuality = $("#frame-preview-modal-canvas").attr("data-quality");
    drawFrame(canvasID, canvasSKU, canvasImageURL, "medium");
    var image_filename = profile_id + "_" + color_id;
    $("#frame-preview-modal")
        .find("img.profile-image-corner")
        .attr("src", SITE_URL + "/images/template/profiles/full/" + image_filename + "_Corner.jpg?r=" + REVISION_COUNTER);
    $("#frame-preview-modal")
        .find("img.profile-image-side")
        .attr("src", SITE_URL + "/images/template/profiles/full/" + image_filename + "_Side.jpg?r=" + REVISION_COUNTER);
    $("#frame-preview-modal")
        .find("img.profile-image-measurements")
        .attr("src", SITE_URL + "/images/template/profiles/measurements/" + profile_id + ".png?r=" + REVISION_COUNTER);
    $("#frame-preview-modal")
        .find(".video_loop source")
        .attr("src", SITE_URL + "/video/frame-preview/" + image_filename + ".mp4?r=" + REVISION_COUNTER);
    $("#frame-preview-modal .video_loop")[0].load();
});
$("#share-frame-modal").on("show.bs.modal", function () {
    $.ajax({
        type: "POST",
        url: SITE_URL + "/ajax.php",
        dataType: "json",
        timeout: 5000,
        data: { action: "load_frame_preview_get_text" },
        success: function (result) {
            var sku = result.sku;
            var image_url = result.image_url;
            $(".share-frame-link").val(SITE_URL + "/" + sku + "/" + image_url);
        },
    });
});
$("#clear-vs-non-glare").on("show.bs.modal", function () {
    $("#clear-vs-non-glare")
        .find(".video_loop source")
        .attr("src", SITE_URL + "/video/clear-vs-non-glare/Acrylic_Clear_vs_Non-Glare.mp4?r=" + REVISION_COUNTER);
    $("#clear-vs-non-glare .video_loop")[0].load();
});
function addPreviewedFrameToCart(quantity) {
    removeRenderedClasses();
    $.ajax({
        type: "POST",
        url: SITE_URL + "/ajax.php",
        dataType: "json",
        data: { action: "add_to_cart", quantity: quantity },
        error: function () {
            alert("Something's wrong with the shopping cart. Sorry for the inconvenience!");
            return false;
        },
        success: function (result) {
            $("#added-to-cart-modal .item-name").html(result.item_name);
            var item_description_html = "";
            $.each(result.item_attributes, function (index, value) {
                item_description_html += index + ": " + value + "<br>";
            });
            $("#added-to-cart-modal .item-description").html(item_description_html);
            $("#added-to-cart-modal .item-price").html(parseFloat(result.item_price).toFixed(2));
            $("#added-to-cart-modal .coupon-asterisk-wrapper").toggle(result.item_discount);
            $("#added-to-cart-modal .item-quantity").html(result.item_quantity);
            $("#added-to-cart-modal .cart-items").html(result.cart_items);
            $("#added-to-cart-modal .cart-subtotal").html(parseFloat(result.cart_subtotal).toFixed(2));
            canvasID = "canvas-add-to-cart";
            canvasSKU = StandardNotation(canvas_home.attr("data-sku"));
            canvasImageURL = canvas_home.attr("data-image");
            canvasQuality = $("#canvas-add-to-cart").attr("data-quality");
            drawFrame(canvasID, canvasSKU, canvasImageURL, canvasQuality);
            $("#added-to-cart-modal").modal("show");
            $(".add-to-cart-button .fa-spinner").attr("class", "svg-inline--fa fa-spinner fa-w-16").hide();
            $(".add-to-cart-button .fa-shopping-cart").show();
            $(".add-to-cart-button").removeClass("disabled");
            $(".cart-item-count").html(result.cart_items);
            if (result.cart_items > 0) {
                $(".cart-item-count").addClass("in-cart");
                updateLocalStorageCartCount();
            }
            if (location.hostname == "www.frameiteasy.com") addFBPixel("AddToCart");
            const additional_hardware = $("#additional-hardware");
            additional_hardware.addClass("hide");
            var outside_frame_size = result.item_attributes["Outside Frame Size"];
            var width_int = parseFloat(outside_frame_size.substr(0, outside_frame_size.indexOf('"')));
            var height_int = parseFloat(outside_frame_size.substr(outside_frame_size.indexOf("x") + 2, outside_frame_size.indexOf('"')));
            var active_profile_name = $("#the-frame-builder .profile-box.active").data("profile-materials");
            if ((width_int >= 40 || height_int >= 40) && active_profile_name == "Metal") {
                var item_quantity = result.item_quantity;
                additional_hardware.find("select[name=quantity]").val(item_quantity);
                addAccessoryButtonReset();
                additional_hardware.removeClass("hide");
                $(".toggle-video").on("click", function () {
                    if ($("#hanging-hardware-video").attr("src") == undefined) {
                        $("#hanging-hardware-video").attr("src", "https://player.vimeo.com/video/535935455");
                        $("#hanging-hardware-video").slideDown();
                    }
                });
            }
            return true;
        },
    });
}
$(".add-accessory-to-cart-button").on("click", function () {
    $(this).prop("disabled", true);
    $(this).find(".fa-plus").hide();
    $(this).find(".fa-spinner").attr("class", "svg-inline--fa fa-spinner fa-w-16 spin").show();
    var params = { item_type_id: $("#additional-hardware").find("input[name=item_type_id]").val(), accessory_id: $("#additional-hardware").find("input[name=accessory_id]").val() };
    var quantity = $("#additional-hardware select[name=quantity]").val();
    var data = { action: "add_accessory_to_cart", params: params, quantity: quantity };
    var this_button = $(this);
    $.ajax({
        type: "POST",
        url: SITE_URL + "/ajax.php",
        dataType: "json",
        data: data,
        error: function () {
            alert("We can't add this accessory to your cart. Sorry for the inconvenience!");
            addAccessoryButtonReset();
            return false;
        },
        success: function (result) {
            if (result.success == false) {
                alert("We can't add this accessory to your cart. Sorry for the inconvenience!");
                addAccessoryButtonReset();
                return;
            }
            $(".cart-item-count").html(result.cart_items);
            this_button.find(".fa-spinner").hide();
            this_button.find(".fa-check").show();
            this_button.find(".text").text("Added to Cart!");
            if (location.hostname == "www.frameiteasy.com") addFBPixel("AddToCart");
            return true;
        },
    });
});
function addAccessoryButtonReset() {
    const add_accessory_to_cart_button = $("#additional-hardware .add-accessory-to-cart-button");
    add_accessory_to_cart_button.find(".fa-plus").show();
    add_accessory_to_cart_button.find(".fa-check, .fa-spinner").hide();
    add_accessory_to_cart_button.find(".text").text("Add to Cart");
    add_accessory_to_cart_button.prop("disabled", false);
}
$(document).ready(function () {
    function printOrNoPrintAddToCart() {
        var quantity = parseInt($(".frame-preview-quantity").val());
        $(".add-to-cart-button").addClass("disabled");
        $(".add-to-cart-button .fa-shopping-cart").hide();
        $(".add-to-cart-button .fa-spinner").attr("class", "svg-inline--fa fa-spinner fa-w-16 spin").show();
        addPreviewedFrameToCart(quantity);
    }
    $(".frame-preview-quantity").on("change", function () {
        var new_value = $(this).val();
        $(".frame-preview-quantity").val(new_value);
    });
    $(".add-to-cart-button")
        .unbind("click")
        .click(function (e) {
            e.preventDefault();
            var fileURL = $(".pick-a-photo .image img").attr("src"),
                filename = fileURL.substr(fileURL.lastIndexOf("/") + 1).slice(0, -4);
            if (filename) {
                canvasID = "print-this-canvas";
                canvasSKU = StandardNotation(canvas_home.attr("data-sku"));
                canvasImageURL = canvas_home.attr("data-image");
                canvasQuality = $("#print-this-canvas").attr("data-quality");
                drawFrame(canvasID, canvasSKU, canvasImageURL, canvasQuality);
                canvasID = "dont-print-this-canvas";
                canvasSKU = StandardNotation(canvas_home.attr("data-sku"));
                drawFrame(canvasID, canvasSKU, "", "");
                $("#dont-print-this-confirm")
                    .unbind("click")
                    .click(function () {
                        $("#canvas-home").attr("data-image", "");
                        $(".reset-image-upload").click();
                        printOrNoPrintAddToCart();
                        $("#print-or-not-print").modal("hide");
                    });
                $("#print-this-confirm")
                    .unbind("click")
                    .click(function () {
                        printOrNoPrintAddToCart();
                        $("#print-or-not-print").modal("hide");
                    });
                $("#print-or-not-print").modal("show");
            } else {
                printOrNoPrintAddToCart();
            }
        });
});
$(document).ready(function () {
    $("#the-frame-builder .your-frame-line-item").on("hover", function () {
        highlightPreviewComponent($(this).data("highlight"));
    });
    $("#the-frame-builder .your-frame-line-item").on("click", function (event) {
        event.preventDefault();
        selectTab($(this).data("tab-name"));
    });
    $("#the-frame-builder .your-frame-line-item").on("mouseleave", function () {
        unHighlightAllPreviewComponents();
    });
});
$(".frame-builder-start-over").on("click", function () {
    $.ajax({
        type: "POST",
        url: SITE_URL + "/ajax.php",
        data: { action: "frame_builder_start_over" },
        success: function () {
            location.reload();
            return true;
        },
    });
});
$(document).ready(function () {
    var mat_designs_modal_target = false;
    var mat_designs_modal_mat = false;
    $(".mat-design-input").on("click", function () {
        $(".modal").modal("hide");
        $("#mat-designs-modal").modal("show");
        mat_designs_modal_mat = $(this).data("mat");
        $.ajax({
            type: "POST",
            url: SITE_URL + "/ajax_smarty.php",
            dataType: "html",
            timeout: 5000,
            data: { page: "mat-designs-modal" },
            success: function (result) {
                $("#mat-designs-modal .modal-body").html(result);
            },
        });
    });
    $("body").on("click", "#mat-designs-modal .mat-design-tile", function () {
        var mat_type_id = $(this).data("mat-type-id");
        var mat_design_id = $(this).data("mat-design-id");
        if (mat_designs_modal_mat == "outer") {
            updateSessionFramePreviewParameters({ outer_mat_type_id: mat_type_id, outer_mat_design_id: mat_design_id });
        } else if (mat_designs_modal_mat == "inner") {
            updateSessionFramePreviewParameters({ inner_mat_type_id: mat_type_id, inner_mat_design_id: mat_design_id });
        }
        $("#mat-designs-modal").modal("hide");
        framePreviewUpdateText();
    });
});
$(function () {
    "use strict";
    var url = SITE_URL + "/uploads/",
        uploadButton = $("<button/>")
            .addClass("btn btn-primary")
            .prop("disabled", true)
            .text("Processing...")
            .on("click", function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off("click")
                    .text("Abort")
                    .on("click", function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });
    $("#fileupload-mobile, #fileupload-desktop")
        .fileupload({
            url: url,
            dataType: "json",
            autoUpload: true,
            acceptFileTypes: /(\.|\/)(jpe?g|png|hei[cf])$/i,
            maxFileSize: 200000000,
            maxNumberOfFiles: 1,
            disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
            previewMaxWidth: 100,
            previewMaxHeight: 100,
            previewCrop: true,
        })
        .on("fileuploadadd", function (e, data) {
            data.context = $("<div/>").appendTo("#files");
            $.each(data.files, function (index, file) {
                var node = $("<p/>").append($("<span/>").text(file.name));
                if (!index) {
                }
                $(".image-upload-wrapper .progress").slideDown();
            });
        })
        .on("fileuploadprocessalways", function (e, data) {
            var index = data.index,
                file = data.files[index],
                node = $(data.context.children()[index]);
            if (file.preview) {
            }
            if (file.error) {
                displayFramePreviewNotification([file.error]);
                $(".image-upload-wrapper").slideDown(1);
                $(".image-upload-wrapper .progress").hide();
                $(".image-uploaded-wrapper").slideUp(1);
                $(".after-picked").slideUp(1);
                $(".print-text").html("None");
                $(".after-picked").find(".image img").attr("src", "");
                $(".before-picked").slideDown(1);
                $(".image-upload-wrapper").slideDown(1);
                $("#fileupload-desktop").empty();
                $("#fileupload-mobile").empty();
                if (typeof newrelic === "object" && newrelic && "noticeError" in newrelic) {
                    newrelic.noticeError(new Error("Image upload error"), { name: file.name, size: file.size, error: file.error });
                }
                return false;
            }
            if (index + 1 === data.files.length) {
                data.context.find("button").text("Upload").prop("disabled", !!data.files.error);
            }
        })
        .on("fileuploadprogressall", function (e, data) {
            var progress = parseInt((data.loaded / data.total) * 100, 10);
            $("#progress .progress-bar").css("width", progress + "%");
        })
        .on("fileuploaddone", function (e, data) {
            $.each(data.result.files, function (index, file) {
                if (file.error) {
                    $("#print-modal").modal("hide");
                    displayFramePreviewNotification(['Oops! The image file did not upload to our server. Please <a href="contact">contact us</a> and we can assist. ' + file.error], false);
                    $(".image-upload-wrapper").slideDown(1);
                    $(".image-upload-wrapper .progress").hide();
                    $(".image-uploaded-wrapper").slideUp(1);
                    updateSessionFramePreviewParameters({ image_url: "" });
                    $(".after-picked").slideUp(1);
                    $(".print-text").html("None");
                    $(".after-picked").find(".image img").attr("src", "");
                    $(".before-picked").slideDown(1);
                    $(".image-upload-wrapper").slideDown(1);
                    $("#fileupload-desktop").empty();
                    $("#fileupload-mobile").empty();
                    $("html, body").animate({ scrollTop: $("#the-frame-builder").offset().top - 80 }, 250);
                } else if (file.url) {
                    var link = $("<a>").attr("target", "_blank").prop("href", file.url);
                    $(data.context.children()[index]).wrap(link);
                    $(".image-upload-wrapper").slideUp().hide();
                    updateSessionFramePreviewParameters({ image_url: file.name });
                    $(".pick-a-photo .before-picked").slideUp();
                    $(".pick-a-photo .after-picked").slideDown();
                    $(".print-text").html("Yes");
                    $(".pick-a-photo .after-picked").css("overflow", "visible");
                    if (localStorage.getItem("paperType") == 2) {
                        $('.pick-a-photo .after-picked .paper-type-group-wrapper .selection-tile[data-value="2"]').click();
                    } else {
                        $('.pick-a-photo .after-picked .paper-type-group-wrapper .selection-tile[data-value="1"]').click();
                    }
                    $(".pick-a-photo .after-picked .image img").hide();
                    file.url = file.url.replace("-temp/", "-thumbs/");
                    var preload = [file.url];
                    var promises = [];
                    for (var i = 0; i < preload.length; i++) {
                        (function (url, promise) {
                            var img = new Image();
                            img.onload = function () {
                                promise.resolve();
                            };
                            img.src = url;
                        })(preload[i], (promises[i] = $.Deferred()));
                    }
                    $.when.apply($, promises).done(function () {
                        $(".pick-a-photo .after-picked .image img").attr("src", file.url);
                        $(".pick-a-photo .after-picked .image img").show();
                    });
                }
            });
        })
        .on("fileuploadfail", function (e, data) {
            $("#print-modal").modal("hide");
            displayFramePreviewNotification(['Oops! The image file did not upload to our server. Please <a href="contact">contact us</a> and we can assist.'], false);
            $(".image-upload-wrapper").slideDown(1);
            $(".image-upload-wrapper .progress").hide();
            $(".image-uploaded-wrapper").slideUp(1);
            updateSessionFramePreviewParameters({ image_url: "" });
            $(".after-picked").slideUp(1);
            $(".print-text").html("None");
            $(".after-picked").find(".image img").attr("src", "");
            $(".before-picked").slideDown(1);
            $(".image-upload-wrapper").slideDown(1);
            $("#fileupload-desktop").empty();
            $("#fileupload-mobile").empty();
            $("html, body").animate({ scrollTop: $("#the-frame-builder").offset().top - 80 }, 250);
        })
        .prop("disabled", !$.support.fileInput)
        .parent()
        .addClass($.support.fileInput ? undefined : "disabled");
});
$(".paper-type-group-wrapper .selection-tile").on("click", function () {
    if (!$(this).hasClass("active")) {
        $(".paper-type-group-wrapper .selection-tile").removeClass("active");
        var custom_print_paper_type_id = $(this).data("value");
        localStorage.setItem("paperType", custom_print_paper_type_id);
        updateSessionFramePreviewParameters({ custom_print_paper_type_id: custom_print_paper_type_id });
        $(this).addClass("active");
    }
});
$(".reset-image-upload").on("click", function () {
    $(".selection-tile.pick-a-photo .fileinput-button").removeClass("disabled");
    $(".pick-a-photo .after-picked .paper-type-group-wrapper .selection-tile").removeClass("active");
    $("#fileupload-desktop").removeAttr("disabled");
    $("#fileupload-mobile").removeAttr("disabled");
    $(".image-upload-wrapper").slideDown();
    $(".image-upload-wrapper .progress").hide();
    $(".image-uploaded-wrapper").slideUp();
    updateSessionFramePreviewParameters({ image_url: "" });
    $(".after-picked").each(function () {
        if ($(this).is(":visible")) {
            $(this).slideUp();
        } else {
            $(this).css("display", "none");
        }
    });
    $(".print-text").html("None");
    $(".after-picked").find(".image img").attr("src", "");
    $(".before-picked").slideDown();
    $(".image-upload-wrapper").slideDown();
    $("#fileupload-desktop").empty();
    $("#fileupload-mobile").empty();
});
$(document).ready(function () {
    $("body").on("click", ".set-art-size", function () {
        var width_int = $(this).data("width-int");
        var width_frac = $(this).data("width-frac");
        var height_int = $(this).data("height-int");
        var height_frac = $(this).data("height-frac");
        $(".tab-content[data-tab-name=size] select.width-int").val(width_int);
        $(".tab-content[data-tab-name=size] select.width-frac").val(width_frac);
        $(".tab-content[data-tab-name=size] select.height-int").val(height_int);
        $(".tab-content[data-tab-name=size] select.height-frac").val(height_frac).trigger("change");
    });
});
$(".ui-slider-handle").draggable();
$(function () {
    $(".print-size-slider").slider({ min: 0, max: 250, value: $(".print-size-slider").data("default-value"), animate: true });
});
$(function () {
    $("#print-size-slider-mobile").slider({ min: 0, max: 250, value: $("#print-size-slider-mobile").data("default-value"), animate: true });
});
$(document).ready(function () {
    $(".print-size-slider, #print-size-slider-mobile").on("slidestop", function (event, ui) {
        scalePrintSize(ui.value);
    });
});
$(function () {
    if ($('.pick-a-photo .after-picked .paper-type-group-wrapper .selection-tile[data-value="2"]').hasClass("active")) {
        localStorage.setItem("paperType", 2);
    }
});
$("[data-toggle=modal]").on("click", function () {
    $(".modal").modal("hide");
});
$(window).resize(function () {
    if (!$("#the-frame-builder").is(":visible")) {
        waitForFinalEvent(
            function () {
                if ($("#the-frame-builder").is(":visible")) {
                    var new_tab_content_height = $(".tab-box.frame-preview .tab-content.active").height();
                    $(".tab-box.frame-preview .content").clearQueue();
                }
            },
            250,
            "frame-preview-controls-resize"
        );
    }
});
$(".has-popover").on("mouseover", function () {
    if ($(this).data("content").indexOf("data-src") !== -1) {
        var new_content = $(this).data("content").replace("data-src", "src");
        $(this).attr("data-content", new_content);
        $(this).popover("show");
    }
});
$(document).bind("keydown", function (e) {
    if (e.keyCode == 72 && $('.tab[data-tab-name="cover"]').hasClass("active")) {
        if ($(".no-cover").is(":visible")) {
            $(".no-cover").slideUp();
        } else {
            $(".no-cover").slideDown();
            $(".no-cover").css("overflow", "visible");
            $(".no-cover").closest(".content").css("height", "auto");
        }
    }
});
if ($(".referral-header").length) {
    setTimeout(function () {
        $(".referral-header").slideUp("slow");
    }, 7000);
}
$(function () {
    $("#the-frame-builder .tab, #the-frame-builder .next-step").click(function () {
        if (windowsize < 992) {
            if ($(this).hasClass("last-step")) {
                $("html, body").animate({ scrollTop: $("#canvas-home").offset().top - 15 }, 250);
            } else {
                var data_tab_name = $(this).attr("data-tab-name");
                var data_tab_id = $('#the-frame-builder .tab[data-tab-name="' + data_tab_name + '"]').attr("data-tab-id") - 1;
                $("html, body").animate({ scrollTop: $('#the-frame-builder .tab[data-tab-id="1"]').offset().top + 44 * data_tab_id }, 250);
            }
        } else {
            $("html, body").animate({ scrollTop: $("#the-frame-builder").offset().top - 80 }, 250);
        }
    });
});
$(document).ready(function () {
    $("a.scroll-link").click(function (event) {
        event.preventDefault();
        if ($(window).width() < 992) {
            $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top - 10 }, 500);
        } else {
            $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top - 100 }, 500);
        }
    });
});
$(document).ready(function () {
    var current_url = window.location.href;
    var url_old_sku_check = current_url.indexOf("/FIE26");
    var url_sku_check = current_url.indexOf("/26");
    if (url_sku_check > -1 || url_old_sku_check > -1) {
        if ($(window).width() < 992) {
            $("html, body").animate({ scrollTop: $("#design-your-frame").offset().top - 10 }, 500);
        } else {
            $("html, body").animate({ scrollTop: $("#design-your-frame").offset().top - 100 }, 500);
        }
    }
});
var interval = null;
var slideIndex = 1;
function changeSlides(n) {
    showSlides((slideIndex += n));
}
function showSlides(n) {
    var slides = $("#review-slider-wrap .review-slider .review-group");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    $("#review-slider-wrap .review-slider .review-group").each(function () {
        $(this).fadeOut("slow");
    });
    $("#review-slider-wrap .review-slider .review-group").each(function () {
        var thisSlideNumber = $(this).attr("slide-number");
        if (thisSlideNumber == slideIndex) {
            $(this).fadeIn();
        } else {
            $(this).fadeOut();
        }
    });
}
$(".slider-control.left").on("click", function () {
    changeSlides(-1);
});
$(".slider-control.right").on("click", function () {
    changeSlides(1);
});
$(".slider-control").on("click", function () {
    clearInterval(interval);
});
function autoAdvance() {
    changeSlides(1);
}
$(function () {
    $("#review-slider-wrap .review-slider .review-group").each(function (i) {
        var slideNumber = i + 1;
        $(this).attr("slide-number", slideNumber);
    });
    showSlides(slideIndex);
    interval = setInterval(autoAdvance, 5000);
});
