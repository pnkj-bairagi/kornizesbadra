/*
	Minified canvas-frame.js
	Last Modified: Fri, 29 Oct 2021 14:40:46 GMT
*/
var item_type_id, profile_id, color_id, data_image;
function parseFraction(hex) {
    var hex_values = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F"];
    var dec_values = [0, 0.0625, 0.125, 0.1875, 0.25, 0.3125, 0.375, 0.4375, 0.5, 0.5625, 0.625, 0.6875, 0.75, 0.8125, 0.875, 0.9375];
    var dec_index = hex_values.indexOf(hex);
    return dec_values[dec_index];
}
function matTypeStyle(int) {
    switch (int) {
        case 2:
            return "#010101";
            break;
        case 3:
            return "#ddd";
            break;
        default:
            return "#ddd";
            break;
    }
}
function drawEllipseWithBezierByCenter(ctx, cx, cy, w, h) {
    drawEllipseWithBezier(ctx, cx - w / 2.0, cy - h / 2.0, w, h);
}
function drawEllipseWithBezier(ctx, x, y, w, h) {
    var kappa = 0.5522848,
        ox = (w / 2) * kappa,
        oy = (h / 2) * kappa,
        xe = x + w,
        ye = y + h,
        xm = x + w / 2,
        ym = y + h / 2;
    ctx.save();
    ctx.beginPath();
    ctx.moveTo(x, ym);
    ctx.bezierCurveTo(x, ym - oy, xm - ox, y, xm, y);
    ctx.bezierCurveTo(xm + ox, y, xe, ym - oy, xe, ym);
    ctx.bezierCurveTo(xe, ym + oy, xm + ox, ye, xm, ye);
    ctx.bezierCurveTo(xm - ox, ye, x, ym + oy, x, ym);
    ctx.fillStyle = "#fff";
    ctx.shadowColor = "rgba(0,0,0,0.25)";
    ctx.shadowBlur = 2;
    ctx.fill();
    ctx.restore();
}
function convertCanvasToImage(canvas) {
    var image = new Image();
    image.src = canvas.toDataURL("image/png");
    return image;
}
function replaceCanvasWithImage(canvasID, canvas) {
    var canvas_wrapper = document.getElementById(canvasID);
    if (canvas_wrapper.hasChildNodes()) {
        canvas_wrapper.removeChild(canvas_wrapper.firstChild);
    }
    canvas_wrapper.appendChild(convertCanvasToImage(canvas));
}
function drawFrame(canvasID, canvasSKU, canvasImageURL, canvasQuality) {
    var outside_width_in = false;
    var outside_height_in = false;
    var frame_aspect_ratio = false;
    var proposed_frame_width_px = false;
    var proposed_frame_height_px = false;
    var proposed_start_x = false;
    var proposed_start_y = false;
    var pixels_per_linear_inch = false;
    var frame_thickness_px = false;
    var frame_width_px = false;
    var frame_height_px = false;
    var start_x = 0;
    var start_y = 0;
    var frame_overlap_inches = 0.25;
    var frame_overlap_px = false;
    var art_overlap_inches = 0.25;
    var art_overlap_px = false;
    var mat_core_visible_in = 0.0625;
    var width_int = 8;
    var width_frac = 0;
    var width_full = 8;
    var width_int_px = 160;
    var height_int = 10;
    var height_frac = 0;
    var height_full = 10;
    var height_int_px = 200;
    var profile_saw_offset = false;
    var profile_face = false;
    var canvas_wrapper = document.getElementById(canvasID);
    var canvas_set_width = canvas_wrapper.dataset.width;
    var canvas_set_height = canvas_wrapper.dataset.height;
    var canvas = document.createElement("canvas");
    var context = canvas.getContext("2d");
    canvasSKU = String(canvasSKU);
    if (isNaN(canvasSKU.substr(0, 3))) {
        canvasSKU = canvasSKU.substr(3);
    }
    item_type_id = parseInt(canvasSKU.substr(0, 2));
    if (item_type_id == 26) {
        profile_id = parseInt(canvasSKU.substr(2, 2));
        color_id = parseInt(canvasSKU.substr(4, 2));
        var cover_id = parseInt(canvasSKU.substr(6, 2));
        var width_int = parseInt(canvasSKU.substr(10, 2));
        var width_frac = parseFloat(parseFraction(canvasSKU.substr(12, 1)));
        var height_int = parseInt(canvasSKU.substr(13, 2));
        var height_frac = parseFraction(canvasSKU.substr(15, 1));
        var outer_mat_type = parseInt(canvasSKU.substr(16, 1));
        var outer_mat_design = parseInt(canvasSKU.substr(17, 2));
        var outer_mat_int = parseInt(canvasSKU.substr(19, 2));
        var outer_mat_frac = parseFloat(parseFraction(canvasSKU.substr(21, 1)));
        var outer_mat_visible = outer_mat_int + outer_mat_frac;
        var inner_mat_type = parseInt(canvasSKU.substr(22, 1));
        var inner_mat_design = parseInt(canvasSKU.substr(23, 2));
        var inner_mat_int = parseInt(canvasSKU.substr(25, 2));
        var inner_mat_frac = parseFloat(parseFraction(canvasSKU.substr(27, 1)));
        var inner_mat_visible = inner_mat_int + inner_mat_frac;
        var custom_print_paper_type_id = parseInt(canvasSKU.substr(28, 1));
        width_full = width_int + width_frac;
        height_full = height_int + height_frac;
        canvas.width = canvas_set_width;
        canvas.height = canvas_set_height;
        if (outer_mat_type == 0 || outer_mat_design == 0) outer_mat_visible = 0;
        if (inner_mat_type == 0 || inner_mat_design == 0) inner_mat_visible = 0;
        profile_face = parseFloat(profile_data[profile_id]["profile_face"]);
        profile_saw_offset = parseFloat(profile_data[profile_id]["profile_saw_offset"]);
        outside_width_in = width_full - 2 * art_overlap_inches + 2 * outer_mat_visible + 2 * inner_mat_visible + 2 * frame_overlap_inches + profile_saw_offset;
        outside_height_in = height_full - 2 * art_overlap_inches + 2 * outer_mat_visible + 2 * inner_mat_visible + 2 * frame_overlap_inches + profile_saw_offset;
        frame_aspect_ratio = outside_width_in / outside_height_in;
        var proposed_frame_width_px = canvas_set_width;
        proposed_frame_height_px = canvas_set_width / frame_aspect_ratio;
        proposed_start_x = 0;
        proposed_start_y = 0;
        if (proposed_frame_height_px > canvas_set_height) {
            proposed_frame_width_px = canvas_set_height * frame_aspect_ratio;
            proposed_frame_height_px = canvas_set_height;
            proposed_start_x = 0;
            proposed_start_y = 0;
        }
        frame_width_px = Math.ceil(proposed_frame_width_px);
        frame_height_px = Math.ceil(proposed_frame_height_px);
        start_x = Math.ceil(proposed_start_x);
        start_y = Math.ceil(proposed_start_y);
        pixels_per_linear_inch = frame_width_px / outside_width_in;
        frame_overlap_px = frame_overlap_inches * pixels_per_linear_inch;
        frame_thickness_px = Math.ceil(profile_face * pixels_per_linear_inch);
        context.canvas.width = frame_width_px;
        context.canvas.height = frame_height_px;
        const onload = (img) => new Promise((res) => (img.onload = res));
        var art = new Image();
        var top_image = new Image();
        var bottom_image = new Image();
        var right_image = new Image();
        var left_image = new Image();
        var outer_mat_image = new Image();
        var inner_mat_image = new Image();
        var cover_image = new Image();
        art.crossOrigin = "anonymous";
        top_image.crossOrigin = "anonymous";
        bottom_image.crossOrigin = "anonymous";
        right_image.crossOrigin = "anonymous";
        left_image.crossOrigin = "anonymous";
        outer_mat_image.crossOrigin = "anonymous";
        inner_mat_image.crossOrigin = "anonymous";
        cover_image.crossOrigin = "anonymous";
        var outer_mat_background = false;
        var inner_mat_background = false;
        if (outer_mat_type > 0 && outer_mat_design > 0) {
            outer_mat_background = "images/frame-preview/mats/" + outer_mat_type + "_" + outer_mat_design + ".jpg?r=" + REVISION_COUNTER;
        } else {
            outer_mat_background = "images/frame-preview/blank.png?r=" + REVISION_COUNTER;
        }
        if (inner_mat_type > 0 && inner_mat_design > 0) {
            inner_mat_background = "images/frame-preview/mats/" + inner_mat_type + "_" + inner_mat_design + ".jpg?r=" + REVISION_COUNTER;
        } else {
            inner_mat_background = "images/frame-preview/blank.png?r=" + REVISION_COUNTER;
        }
        if (canvasImageURL && (canvasImageURL !== "" || canvasImageURL !== undefined)) {
            if (canvasQuality == "medium") {
                canvasImageURL = "uploads/frame-builder-medium/" + canvasImageURL;
            } else {
                canvasImageURL = "uploads/frame-builder-thumbs/" + canvasImageURL;
            }
        } else {
            if (canvas_wrapper.id == "canvas-home") {
                canvasImageURL = "images/frame-preview/canvas-upload.png?r=" + REVISION_COUNTER;
            } else {
                canvasImageURL = "images/frame-preview/blank.png?r=" + REVISION_COUNTER;
            }
        }
        outer_mat_image.src = SITE_URL + "/" + outer_mat_background;
        inner_mat_image.src = SITE_URL + "/" + inner_mat_background;
        left_image.src = SITE_URL + "/images/frame-preview/profiles/" + profile_id + "_" + color_id + "_left.png?r=" + REVISION_COUNTER;
        right_image.src = SITE_URL + "/images/frame-preview/profiles/" + profile_id + "_" + color_id + "_right.png?r=" + REVISION_COUNTER;
        bottom_image.src = SITE_URL + "/images/frame-preview/profiles/" + profile_id + "_" + color_id + "_bottom.png?r=" + REVISION_COUNTER;
        top_image.src = SITE_URL + "/images/frame-preview/profiles/" + profile_id + "_" + color_id + "_top.png?r=" + REVISION_COUNTER;
        art.src = SITE_URL + "/" + canvasImageURL;
        cover_image.src = SITE_URL + "/images/frame-preview/covers/" + cover_id + ".png?r=" + REVISION_COUNTER;
        var img_assets = [outer_mat_image, inner_mat_image, left_image, right_image, bottom_image, top_image, art, cover_image];
        img_assets.forEach(function (entry) {
            entry.onerror = function () {
                entry.onerror = null;
                entry.src = SITE_URL + "/images/frame-preview/blank.png?r=" + REVISION_COUNTER;
            };
        });
        Promise.all([art, top_image, bottom_image, right_image, left_image, outer_mat_image, inner_mat_image, cover_image].map(onload)).then(() => {
            var image_width = top_image.width;
            var image_height = top_image.height;
            var temp_rail_canvas = document.createElement("canvas");
            var temp_rail_canvas_context = temp_rail_canvas.getContext("2d");
            var scale_factor = image_height / frame_thickness_px;
            temp_rail_canvas.width = Math.round(Math.max(1, image_width / scale_factor));
            temp_rail_canvas.height = Math.round(Math.max(1, image_height / scale_factor));
            temp_rail_canvas_context.drawImage(top_image, 0, 0, top_image.width, top_image.height, 0, 0, temp_rail_canvas.width, temp_rail_canvas.height);
            context.fillStyle = context.createPattern(temp_rail_canvas, "repeat-x");
            context.beginPath();
            context.moveTo(start_x, start_y);
            context.lineTo(start_x + frame_width_px, start_y);
            context.lineTo(start_x + frame_width_px, start_y + frame_thickness_px);
            context.lineTo(start_x, start_y + frame_thickness_px);
            context.closePath();
            context.translate(start_x, start_y);
            context.fill();
            context.translate(-start_x, -start_y);
            var image_width = bottom_image.width;
            var image_height = bottom_image.height;
            var temp_rail_canvas = document.createElement("canvas");
            var temp_rail_canvas_context = temp_rail_canvas.getContext("2d");
            var scale_factor = image_height / frame_thickness_px;
            temp_rail_canvas.width = Math.round(Math.max(1, image_width / scale_factor));
            temp_rail_canvas.height = Math.round(Math.max(1, image_height / scale_factor));
            temp_rail_canvas_context.drawImage(bottom_image, 0, 0, bottom_image.width, bottom_image.height, 0, 0, temp_rail_canvas.width, temp_rail_canvas.height);
            context.fillStyle = context.createPattern(temp_rail_canvas, "repeat-x");
            context.beginPath();
            context.moveTo(start_x, start_y + frame_height_px - frame_thickness_px);
            context.lineTo(start_x + frame_width_px, start_y + frame_height_px - frame_thickness_px);
            context.lineTo(start_x + frame_width_px, start_y + frame_height_px);
            context.lineTo(start_x, start_y + frame_height_px);
            context.closePath();
            context.translate(start_x, start_y + frame_height_px - frame_thickness_px);
            context.fill();
            context.translate(-start_x, -(start_y + frame_height_px - frame_thickness_px));
            var image_width = left_image.width;
            var image_height = left_image.height;
            var temp_rail_canvas = document.createElement("canvas");
            var temp_rail_canvas_context = temp_rail_canvas.getContext("2d");
            var scale_factor = image_width / frame_thickness_px;
            temp_rail_canvas.width = Math.round(Math.max(1, image_width / scale_factor));
            temp_rail_canvas.height = Math.round(Math.max(1, image_height / scale_factor));
            temp_rail_canvas_context.drawImage(left_image, 0, 0, left_image.width, left_image.height, 0, 0, temp_rail_canvas.width, temp_rail_canvas.height);
            context.fillStyle = context.createPattern(temp_rail_canvas, "repeat-y");
            context.beginPath();
            context.moveTo(start_x, start_y);
            context.lineTo(start_x + frame_thickness_px, start_y + frame_thickness_px);
            context.lineTo(start_x + frame_thickness_px, start_y + frame_height_px - frame_thickness_px);
            context.lineTo(start_x, start_y + frame_height_px);
            context.closePath();
            context.translate(start_x, start_y);
            context.fill();
            context.translate(-start_x, -start_y);
            var image_width = right_image.width;
            var image_height = right_image.height;
            var temp_rail_canvas = document.createElement("canvas");
            var temp_rail_canvas_context = temp_rail_canvas.getContext("2d");
            var scale_factor = image_width / frame_thickness_px;
            temp_rail_canvas.width = Math.round(Math.max(1, image_width / scale_factor));
            temp_rail_canvas.height = Math.round(Math.max(1, image_height / scale_factor));
            temp_rail_canvas_context.drawImage(right_image, 0, 0, right_image.width, right_image.height, 0, 0, temp_rail_canvas.width, temp_rail_canvas.height);
            context.fillStyle = context.createPattern(temp_rail_canvas, "repeat-y");
            context.beginPath();
            context.moveTo(start_x + frame_width_px - frame_thickness_px, start_y + frame_thickness_px);
            context.lineTo(start_x + frame_width_px, start_y);
            context.lineTo(start_x + frame_width_px, start_y + frame_height_px);
            context.lineTo(start_x + frame_width_px - frame_thickness_px, start_y + frame_height_px - frame_thickness_px);
            context.closePath();
            context.translate(start_x + frame_width_px - frame_thickness_px, start_y);
            context.fill();
            context.translate(-(start_x + frame_width_px - frame_thickness_px), -start_y);
            var outer_mat_thickness_px = pixels_per_linear_inch * outer_mat_visible;
            var outer_mat_core_thickness_px = pixels_per_linear_inch * mat_core_visible_in;
            var temp_mat_canvas = document.createElement("canvas");
            var temp_mat_canvas_context = temp_mat_canvas.getContext("2d");
            var outer_mat_start_x = start_x + frame_thickness_px;
            var outer_mat_start_y = start_y + frame_thickness_px;
            var outer_mat_width_px = frame_width_px - 2 * frame_thickness_px;
            var outer_mat_height_px = frame_height_px - 2 * frame_thickness_px;
            temp_mat_canvas.height = outer_mat_height_px;
            temp_mat_canvas.width = outer_mat_width_px;
            temp_mat_canvas_context.drawImage(outer_mat_image, 0, 0, outer_mat_image.width, outer_mat_image.height, 0, 0, temp_mat_canvas.width, temp_mat_canvas.height);
            context.fillStyle = context.createPattern(temp_mat_canvas, "repeat");
            context.fillRect(outer_mat_start_x, outer_mat_start_y, outer_mat_width_px, outer_mat_height_px);
            if (outer_mat_visible > 0) {
                context.fillStyle = matTypeStyle(outer_mat_type);
                var outer_mat_core_start_x = start_x + frame_thickness_px + outer_mat_thickness_px - outer_mat_core_thickness_px;
                var outer_mat_core_start_y = start_y + frame_thickness_px + outer_mat_thickness_px - outer_mat_core_thickness_px;
                var outer_mat_core_width_px = frame_width_px - 2 * frame_thickness_px - 2 * outer_mat_thickness_px + 2 * outer_mat_core_thickness_px;
                var outer_mat_core_height_px = frame_height_px - 2 * frame_thickness_px - 2 * outer_mat_thickness_px + 2 * outer_mat_core_thickness_px;
                context.fillRect(outer_mat_core_start_x, outer_mat_core_start_y, outer_mat_core_width_px, outer_mat_core_height_px);
            }
            context.fillStyle = "#fff";
            var outer_mat_opening_start_x = start_x + frame_thickness_px + outer_mat_thickness_px;
            var outer_mat_opening_start_y = start_y + frame_thickness_px + outer_mat_thickness_px;
            var outer_mat_opening_width_px = frame_width_px - 2 * frame_thickness_px - 2 * outer_mat_thickness_px;
            var outer_mat_opening_height_px = frame_height_px - 2 * frame_thickness_px - 2 * outer_mat_thickness_px;
            context.fillRect(outer_mat_opening_start_x, outer_mat_opening_start_y, outer_mat_opening_width_px, outer_mat_opening_height_px);
            var inner_mat_thickness_px = pixels_per_linear_inch * inner_mat_visible;
            var inner_mat_core_thickness_px = pixels_per_linear_inch * mat_core_visible_in;
            var temp_mat_canvas = document.createElement("canvas");
            var temp_mat_canvas_context = temp_mat_canvas.getContext("2d");
            var inner_mat_start_x = start_x + frame_thickness_px + outer_mat_thickness_px;
            var inner_mat_start_y = start_y + frame_thickness_px + outer_mat_thickness_px;
            var inner_mat_width_px = frame_width_px - 2 * frame_thickness_px - 2 * outer_mat_thickness_px;
            var inner_mat_height_px = frame_height_px - 2 * frame_thickness_px - 2 * outer_mat_thickness_px;
            temp_mat_canvas.height = inner_mat_height_px;
            temp_mat_canvas.width = inner_mat_width_px;
            temp_mat_canvas_context.drawImage(inner_mat_image, 0, 0, inner_mat_image.width, inner_mat_image.height, 0, 0, temp_mat_canvas.width, temp_mat_canvas.height);
            context.fillStyle = context.createPattern(temp_mat_canvas, "repeat");
            context.fillRect(inner_mat_start_x, inner_mat_start_y, inner_mat_width_px, inner_mat_height_px);
            if (inner_mat_visible > 0) {
                context.fillStyle = matTypeStyle(inner_mat_type);
                var inner_mat_core_start_x = start_x + frame_thickness_px + outer_mat_thickness_px + inner_mat_thickness_px - inner_mat_core_thickness_px;
                var inner_mat_core_start_y = start_y + frame_thickness_px + outer_mat_thickness_px + inner_mat_thickness_px - inner_mat_core_thickness_px;
                var inner_mat_core_width_px = frame_width_px - 2 * frame_thickness_px - 2 * outer_mat_thickness_px - 2 * inner_mat_thickness_px + 2 * inner_mat_core_thickness_px;
                var inner_mat_core_height_px = frame_height_px - 2 * frame_thickness_px - 2 * outer_mat_thickness_px - 2 * inner_mat_thickness_px + 2 * inner_mat_core_thickness_px;
                context.fillRect(inner_mat_core_start_x, inner_mat_core_start_y, inner_mat_core_width_px, inner_mat_core_height_px);
            }
            context.fillStyle = "#fff";
            var inner_mat_opening_start_x = start_x + frame_thickness_px + outer_mat_thickness_px + inner_mat_thickness_px;
            var inner_mat_opening_start_y = start_y + frame_thickness_px + outer_mat_thickness_px + inner_mat_thickness_px;
            var inner_mat_opening_width_px = frame_width_px - 2 * frame_thickness_px - 2 * outer_mat_thickness_px - 2 * inner_mat_thickness_px;
            var inner_mat_opening_height_px = frame_height_px - 2 * frame_thickness_px - 2 * outer_mat_thickness_px - 2 * inner_mat_thickness_px;
            context.fillRect(inner_mat_opening_start_x, inner_mat_opening_start_y, inner_mat_opening_width_px, inner_mat_opening_height_px);
            var rendered_art_dpi = inner_mat_opening_width_px / (width_full - 2 * art_overlap_inches);
            if (inner_mat_opening_height_px > inner_mat_opening_width_px) {
                rendered_art_dpi = inner_mat_opening_height_px / (height_full - 2 * art_overlap_inches);
            }
            var rendered_art_overlap_px = 2 * art_overlap_inches * rendered_art_dpi;
            var art_target_aspect_ratio = (inner_mat_opening_width_px + rendered_art_overlap_px) / (inner_mat_opening_height_px + rendered_art_overlap_px);
            var art_aspect_ratio = art.width / art.height;
            var art_width_px = 0;
            var art_height_px = 0;
            var width_ratio = art.width / (inner_mat_opening_width_px + rendered_art_overlap_px);
            var height_ratio = art.height / (inner_mat_opening_height_px + rendered_art_overlap_px);
            if (art_aspect_ratio > art_target_aspect_ratio) {
                art_width_px = (inner_mat_opening_width_px + rendered_art_overlap_px) * height_ratio;
                art_height_px = art.height;
            } else {
                art_width_px = art.width;
                art_height_px = (inner_mat_opening_height_px + rendered_art_overlap_px) * width_ratio;
            }
            var cropped_art_dpi = art_width_px / width_full;
            var overlap_px = 2 * art_overlap_inches * cropped_art_dpi;
            art_width_px -= overlap_px;
            art_height_px -= overlap_px;
            var crop_x = (art.width - art_width_px) / 2;
            var crop_y = (art.height - art_height_px) / 2;
            if (canvas_wrapper.classList.contains("marked-nsfw")) {
                context.filter = "blur(16px)";
            }
            context.drawImage(art, crop_x, crop_y, art_width_px, art_height_px, inner_mat_opening_start_x, inner_mat_opening_start_y, inner_mat_opening_width_px, inner_mat_opening_height_px);
            var temp_frame_inner_shadow = document.createElement("canvas");
            var temp_frame_inner_shadow_context = temp_frame_inner_shadow.getContext("2d");
            temp_frame_inner_shadow.width = canvas.width;
            temp_frame_inner_shadow.height = canvas.height;
            temp_frame_inner_shadow_context.rect(outer_mat_start_x, outer_mat_start_y, outer_mat_width_px, outer_mat_height_px);
            temp_frame_inner_shadow_context.shadowColor = "rgba(0,0,0,1)";
            temp_frame_inner_shadow_context.shadowBlur = 5;
            temp_frame_inner_shadow_context.shadowOffsetX = 0;
            temp_frame_inner_shadow_context.strokeStyle = "rgba(188,188,188,1)";
            temp_frame_inner_shadow_context.lineWidth = 0;
            temp_frame_inner_shadow_context.stroke();
            temp_frame_inner_shadow_context.shadowColor = "rgba(0,0,0,0)";
            temp_frame_inner_shadow_context.globalCompositeOperation = "destination-in";
            temp_frame_inner_shadow_context.fill();
            temp_frame_inner_shadow_context.globalCompositeOperation = "destination-over";
            temp_frame_inner_shadow_context.fillStyle = "rgba(0,0,0,0)";
            temp_frame_inner_shadow_context.fill();
            temp_frame_inner_shadow_context.globalCompositeOperation = "source-over";
            context.drawImage(temp_frame_inner_shadow, 0, 0);
            if (outer_mat_visible > 0) {
                var temp_frame_single_mat_shadow = document.createElement("canvas");
                var temp_frame_single_mat_shadow_context = temp_frame_single_mat_shadow.getContext("2d");
                temp_frame_single_mat_shadow.width = canvas.width;
                temp_frame_single_mat_shadow.height = canvas.height;
                temp_frame_single_mat_shadow_context.rect(outer_mat_core_start_x, outer_mat_core_start_y, outer_mat_core_width_px, outer_mat_core_height_px);
                temp_frame_single_mat_shadow_context.shadowColor = "rgba(0,0,0,0.75)";
                temp_frame_single_mat_shadow_context.shadowBlur = 5;
                temp_frame_single_mat_shadow_context.shadowOffsetX = 0;
                temp_frame_single_mat_shadow_context.strokeStyle = "rgba(255,255,255,1)";
                temp_frame_single_mat_shadow_context.lineWidth = 0;
                temp_frame_single_mat_shadow_context.stroke();
                temp_frame_single_mat_shadow_context.shadowColor = "rgba(0,0,0,0)";
                temp_frame_single_mat_shadow_context.globalCompositeOperation = "destination-in";
                temp_frame_single_mat_shadow_context.fill();
                temp_frame_single_mat_shadow_context.globalCompositeOperation = "destination-over";
                temp_frame_single_mat_shadow_context.fillStyle = "rgba(0,0,0,0)";
                temp_frame_single_mat_shadow_context.fill();
                temp_frame_single_mat_shadow_context.globalCompositeOperation = "source-over";
                context.drawImage(temp_frame_single_mat_shadow, 0, 0);
            }
            if (inner_mat_visible > 0) {
                var temp_frame_double_mat_shadow = document.createElement("canvas");
                var temp_frame_double_mat_shadow_context = temp_frame_double_mat_shadow.getContext("2d");
                temp_frame_double_mat_shadow.width = canvas.width;
                temp_frame_double_mat_shadow.height = canvas.height;
                temp_frame_double_mat_shadow_context.rect(inner_mat_core_start_x, inner_mat_core_start_y, inner_mat_core_width_px, inner_mat_core_height_px);
                temp_frame_double_mat_shadow_context.shadowColor = "rgba(0,0,0,0.5)";
                temp_frame_double_mat_shadow_context.shadowBlur = 5;
                temp_frame_double_mat_shadow_context.shadowOffsetX = 0;
                temp_frame_double_mat_shadow_context.strokeStyle = "rgba(255,255,255,1)";
                temp_frame_double_mat_shadow_context.lineWidth = 0;
                temp_frame_double_mat_shadow_context.stroke();
                temp_frame_double_mat_shadow_context.shadowColor = "rgba(0,0,0,0)";
                temp_frame_double_mat_shadow_context.globalCompositeOperation = "destination-in";
                temp_frame_double_mat_shadow_context.fill();
                temp_frame_double_mat_shadow_context.globalCompositeOperation = "destination-over";
                temp_frame_double_mat_shadow_context.fillStyle = "rgba(0,0,0,0)";
                temp_frame_double_mat_shadow_context.fill();
                temp_frame_double_mat_shadow_context.globalCompositeOperation = "source-over";
                context.drawImage(temp_frame_double_mat_shadow, 0, 0);
            }
            var temp_cover_canvas = document.createElement("canvas");
            var temp_cover_canvas_context = temp_cover_canvas.getContext("2d");
            var cover_start_x = start_x + frame_thickness_px;
            var cover_start_y = start_y + frame_thickness_px;
            var cover_width_px = frame_width_px - 2 * frame_thickness_px;
            var cover_height_px = frame_height_px - 2 * frame_thickness_px;
            temp_cover_canvas.height = cover_height_px;
            temp_cover_canvas.width = cover_width_px;
            temp_cover_canvas_context.drawImage(cover_image, 0, 0, cover_image.width, cover_image.height, 0, 0, temp_cover_canvas.width, temp_cover_canvas.height);
            context.fillStyle = context.createPattern(temp_cover_canvas, "repeat");
            context.fillRect(cover_start_x, cover_start_y, cover_width_px, cover_height_px);
            document.getElementById(canvasID).classList.add("shadow");
            replaceCanvasWithImage(canvasID, canvas);
        });
    } else if (item_type_id == 29) {
        var mat_type_id = parseInt(canvasSKU.substr(2, 1));
        var mat_design_id = parseInt(canvasSKU.substr(3, 2));
        var mat_opening_type_id = parseInt(canvasSKU.substr(5, 1));
        var mat_opening_position_id = parseInt(canvasSKU.substr(6, 1));
        var outside_width_int = parseInt(canvasSKU.substr(7, 2));
        var outside_width_frac = parseFloat(parseFraction(canvasSKU.substr(9, 1)));
        var outside_height_int = parseInt(canvasSKU.substr(10, 2));
        var outside_height_frac = parseFloat(parseFraction(canvasSKU.substr(12, 1)));
        var inside_width_int = parseInt(canvasSKU.substr(13, 2));
        var inside_width_frac = parseFloat(parseFraction(canvasSKU.substr(15, 1)));
        var inside_height_int = parseInt(canvasSKU.substr(16, 2));
        var inside_height_frac = parseFloat(parseFraction(canvasSKU.substr(18, 1)));
        var default_width = canvas_set_width;
        var default_height = canvas_set_height;
        var temp_canvas = document.createElement("canvas");
        temp_canvas.width = default_width;
        temp_canvas.height = default_height;
        var temp_context = temp_canvas.getContext("2d");
        context.clearRect(0, 0, default_width, default_height);
        var outside_width_in = outside_width_int + outside_width_frac;
        var outside_height_in = outside_height_int + outside_height_frac;
        var outside_aspect_ratio = outside_width_in / outside_height_in;
        if (mat_opening_type_id == 3) {
            var inside_width_in = (inside_height_in = inside_width_int + inside_width_frac);
        } else {
            var inside_width_in = inside_width_int + inside_width_frac;
            var inside_height_in = inside_height_int + inside_height_frac;
        }
        var inside_width_ratio = inside_width_in / outside_width_in;
        var inside_height_ratio = inside_height_in / outside_height_in;
        var proposed_frame_width_px = default_width;
        proposed_frame_height_px = default_width / outside_aspect_ratio;
        proposed_start_x = 0;
        proposed_start_y = Math.ceil((default_height - proposed_frame_height_px) / 2);
        if (proposed_frame_height_px > default_height) {
            proposed_frame_width_px = default_height * outside_aspect_ratio;
            proposed_frame_height_px = default_height;
            proposed_start_x = Math.ceil((default_width - proposed_frame_width_px) / 2);
            proposed_start_y = 0;
        }
        frame_width_px = Math.ceil(proposed_frame_width_px);
        frame_height_px = Math.ceil(proposed_frame_height_px);
        start_x = Math.ceil(proposed_start_x);
        start_y = Math.ceil(proposed_start_y);
        context.canvas.width = frame_width_px;
        context.canvas.height = frame_height_px;
        const onload = (img) => new Promise((res) => (img.onload = res));
        var outside_mat_image = new Image();
        outside_mat_image.crossOrigin = "anonymous";
        outside_mat_image.src = SITE_URL + "/images/frame-preview/mats/" + mat_type_id + "_" + mat_design_id + ".jpg?r=" + REVISION_COUNTER;
        Promise.all([outside_mat_image].map(onload)).then(() => {
            var temp_outside_mat_canvas = document.createElement("canvas");
            var temp_outside_mat_canvas_context = temp_outside_mat_canvas.getContext("2d");
            var matboard_start_x = 0;
            var matboard_start_y = 0;
            var matboard_width_px = frame_width_px;
            var matboard_height_px = frame_height_px;
            temp_outside_mat_canvas.width = matboard_width_px;
            temp_outside_mat_canvas.height = matboard_height_px;
            temp_outside_mat_canvas_context.drawImage(outside_mat_image, 0, 0, outside_mat_image.width, outside_mat_image.height, 0, 0, temp_outside_mat_canvas.width, temp_outside_mat_canvas.height);
            temp_context.fillStyle = temp_context.createPattern(temp_outside_mat_canvas, "repeat");
            temp_context.strokeStyle = matTypeStyle(inner_mat_type);
            temp_context.fillRect(matboard_start_x, matboard_start_y, matboard_width_px, matboard_height_px);
            context.drawImage(temp_canvas, 0, 0);
            var temp_mat_shadow = document.createElement("canvas");
            var temp_mat_shadow_context = temp_mat_shadow.getContext("2d");
            temp_mat_shadow.width = default_width;
            temp_mat_shadow.height = default_height;
            var mat_center_x = frame_width_px / 2;
            var mat_center_y = frame_height_px / 2;
            var matboard_opening_width_px = matboard_width_px * inside_width_ratio;
            var matboard_opening_height_px = matboard_height_px * inside_height_ratio;
            var matboard_opening_start_x = (matboard_width_px - matboard_opening_width_px) / 2;
            var matboard_opening_start_y = (matboard_height_px - matboard_opening_height_px) / 2;
            if (mat_opening_type_id == 5) {
                drawEllipseWithBezierByCenter(temp_mat_shadow_context, mat_center_x, mat_center_y, matboard_opening_width_px, matboard_opening_height_px);
            } else {
                temp_mat_shadow_context.rect(matboard_opening_start_x, matboard_opening_start_y, matboard_opening_width_px, matboard_opening_height_px);
            }
            temp_mat_shadow_context.shadowColor = "rgba(0,0,0,0.35)";
            temp_mat_shadow_context.shadowBlur = 2;
            temp_mat_shadow_context.shadowOffsetX = 0;
            temp_mat_shadow_context.strokeStyle = matTypeStyle(inner_mat_type);
            temp_mat_shadow_context.lineWidth = 2;
            temp_mat_shadow_context.stroke();
            temp_mat_shadow_context.shadowColor = "rgba(0,0,0,0)";
            temp_mat_shadow_context.globalCompositeOperation = "destination-in";
            temp_mat_shadow_context.fill();
            temp_mat_shadow_context.globalCompositeOperation = "destination-over";
            temp_mat_shadow_context.fillStyle = "white";
            temp_mat_shadow_context.fill();
            temp_mat_shadow_context.globalCompositeOperation = "source-over";
            context.drawImage(temp_mat_shadow, 0, 0);
            document.getElementById(canvasID).classList.add("shadow");
            replaceCanvasWithImage(canvasID, canvas);
        });
    }
}
function renderAllFramePreviews() {
    var allCanvas = document.getElementsByClassName("frame-preview-canvas");
    for (var i = 0, max = allCanvas.length; i < max; i++) {
        if (!allCanvas[i].classList.contains("rendered")) {
            var canvasID = allCanvas[i].id;
            var canvasSKU = allCanvas[i].dataset.sku;
            var canvasImageURL = allCanvas[i].dataset.image;
            var canvasQuality = allCanvas[i].dataset.quality;
            if (canvasSKU) {
                drawFrame(canvasID, canvasSKU, canvasImageURL, canvasQuality);
                allCanvas[i].classList.add("rendered");
            }
        }
    }
}
