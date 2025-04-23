<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="KoolReport is an intuitive and flexible Open Source PHP Reporting Framework for faster and easier data report delivery.">
    <meta name="author" content="KoolPHP Inc">
    <meta name="keywords" content="php reporting framework">
    <title>KoolReport Examples &amp; Demonstration</title>

    <link href="./assets/fontawesome/font-awesome.min.css" rel="stylesheet">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/main.css" rel="stylesheet">

    <script type="text/javascript" src="./assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .fa-plus-square-o,
    .fa-minus-square-o {
        cursor: pointer;
    }
</style>
<script>
    function toggleExpandCollapse(i) {
        i.classList.toggle('fa-plus-square-o');
        i.classList.toggle('fa-minus-square-o');
    }

    function toggleExpandCollapseAll(i) {
        let div = i.parentElement.parentElement;
        let expandCollapseButtons = div.querySelectorAll('.expand-collapse');
        expandCollapseButtons.forEach(function(btn) {
            if (i.classList.contains('fa-plus-square-o')) {
                if (btn.classList.contains('fa-plus-square-o')) {
                    btn.click();
                }
            } else if (i.classList.contains('fa-minus-square-o')) {
                if (btn.classList.contains('fa-minus-square-o')) {
                    btn.click();
                }
            }
        })
        i.classList.toggle('fa-plus-square-o');
        i.classList.toggle('fa-minus-square-o');
    }
</script>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a id="baseUrl" class="navbar-brand" href="https://www.koolreport.com/examples">KoolReport Examples</a>
        <a id="repoUrl" class="navbar-brand" href="https://github.com/koolreport/examples-datasources">GitHub</a>
        <ul id="topMenu" class="navbar-nav mr-auto">

        </ul>
        <div class="my-2 my-lg-0">
            <a href="https://www.koolreport.com/get-koolreport-pro" class="btn-get-koolreort-pro btn btn-outline-success my-2 my-sm-0">Get KoolReport Pro</a>
        </div>
    </nav>
    <main class="container">
        <?php
        $root_url = ".";
        $reportJson = <<<EOD
            {
                "EXTENDED PACKAGES": {
                    "<i class='fa fa-gears'></i>ApexCharts": {
                        "Chart Types": "/reports/apexcharts/chart_types/",
                        "Line": {
                            "Collection": "/reports/apexcharts/line/collection/",
                            "Basic": "/reports/apexcharts/line/basic/",
                            "Data Labels": "/reports/apexcharts/line/data_labels/",
                            "Time Series": "/reports/apexcharts/line/time_series/",
                            "Annotations": "/reports/apexcharts/line/annotations/",
                            "Synchronized Charts": "/reports/apexcharts/line/synchronized_charts/",
                            "Brush Charts": "/reports/apexcharts/line/brush_charts/",
                            "Step Line": "/reports/apexcharts/line/step_line/",
                            "Gradient Line": "/reports/apexcharts/line/gradient_line/",
                            "Dashed Line": "/reports/apexcharts/line/dashed_line/",
                            "Missing/Null Values": "/reports/apexcharts/line/missing_null_values/"
                        },
                        "Area": {
                            "Collection": "/reports/apexcharts/area/collection/",
                            "Basic": "/reports/apexcharts/area/basic/",
                            "Spline Area": "/reports/apexcharts/area/spline/",
                            "Datetime X-Axis": "/reports/apexcharts/area/datetime/",
                            "Negative": "/reports/apexcharts/area/negative/",
                            "Github Style": "/reports/apexcharts/area/github_style/",
                            "Stacked Area": "/reports/apexcharts/area/stacked/",
                            "Irregular Timeseries": "/reports/apexcharts/area/irregular_timeseries/",
                            "Missing/Null Values": "/reports/apexcharts/area/missing_null_values/"
                        },
                        "Column": {
                            "Collection": "/reports/apexcharts/column/collection/",
                            "Basic": "/reports/apexcharts/column/basic/",
                            "Data Labels": "/reports/apexcharts/column/data_labels/",
                            "Stacked Column": "/reports/apexcharts/column/stacked/",
                            "Stacked Column 100%": "/reports/apexcharts/column/stacked_100/",
                            "Grouped Stacked": "/reports/apexcharts/column/stacked_group/",
                            "Dumbbell Chart": "/reports/apexcharts/column/dumbbell/",
                            "Markers": "/reports/apexcharts/column/markers/",
                            "Group Label": "/reports/apexcharts/column/group_label/",
                            "Rotated Axis labels": "/reports/apexcharts/column/rotated_axis_labels/",
                            "Rotated Data Labels": "/reports/apexcharts/column/rotated_data_labels/",
                            "Negative Values": "/reports/apexcharts/column/negative/",
                            "Dynamic Loaded": "/reports/apexcharts/column/dynamic_loaded/",
                            "Distributed Columns": "/reports/apexcharts/column/distributed_columns/"
                        },
                        "Bar": {
                            "Collection": "/reports/apexcharts/bar/collection/",
                            "Basic": "/reports/apexcharts/bar/basic/",
                            "Grouped": "/reports/apexcharts/bar/grouped/",
                            "Stacked": "/reports/apexcharts/bar/stacked/",
                            "Stacked Bars 100%": "/reports/apexcharts/bar/stacked_100/",
                            "Grouped Stacked Bars": "/reports/apexcharts/bar/grouped_stacked/",
                            "Negative Values": "/reports/apexcharts/bar/negative/",
                            "Markers": "/reports/apexcharts/bar/markers/",
                            "Reversed Bars": "/reports/apexcharts/bar/reversed_bars/",
                            "Custom Datalabels": "/reports/apexcharts/bar/custom_data_labels/",
                            "Patterned": "/reports/apexcharts/bar/patterned/",
                            "Bar With Images": "/reports/apexcharts/bar/bar_images/"
                        },
                        "Mixed/Combo": {
                            "Collection": "/reports/apexcharts/mixed_combo/collection/",
                            "Line - Column": "/reports/apexcharts/mixed_combo/line_column/",
                            "Multiple Y-Axis": "/reports/apexcharts/mixed_combo/multiple_axis/",
                            "Line - Area": "/reports/apexcharts/mixed_combo/line_area/",
                            "Line - Column - Area": "/reports/apexcharts/mixed_combo/line_column_area/",
                            "Line - Scatter": "/reports/apexcharts/mixed_combo/line_scatter/"
                        },
                        "Range Area": {
                            "Collection": "/reports/apexcharts/range_area/collection/",
                            "Basic": "/reports/apexcharts/range_area/basic/",
                            "Combo": "/reports/apexcharts/range_area/combo/"
                        },
                        "Timeline": {
                            "Collection": "/reports/apexcharts/timeline/collection/",
                            "Basic": "/reports/apexcharts/timeline/basic/",
                            "Custom Colors": "/reports/apexcharts/timeline/custom_colors/",
                            "Multi Series": "/reports/apexcharts/timeline/multi_series/",
                            "Multiple Ranges": "/reports/apexcharts/timeline/multi_ranges/",
                            "Group Rows": "/reports/apexcharts/timeline/group_rows/",
                            "Group Rows - data rows to columns": "/reports/apexcharts/timeline/group_rows_data_rows_to_columns/",
                            "Dumbbel Horizontal": "/reports/apexcharts/timeline/dumbbel_horizontal/"
                        },
                        "Funnel": {
                            "Collection": "/reports/apexcharts/funnel/collection/",
                            "Funnel": "/reports/apexcharts/funnel/basic/",
                            "Pyramid": "/reports/apexcharts/funnel/pyramid/"
                        },
                        "CandleStick": {
                            "Collection": "/reports/apexcharts/candlestick/collection/",
                            "Basic": "/reports/apexcharts/candlestick/basic/",
                            "Combo": "/reports/apexcharts/candlestick/combo/",
                            "Category X-Axis": "/reports/apexcharts/candlestick/category_xaxis/",
                            "Candlestick with Line": "/reports/apexcharts/candlestick/candlestick_line/"
                        },
                        "Box & Whisker": {
                            "Collection": "/reports/apexcharts/box_whisker/collection/",
                            "Basic": "/reports/apexcharts/box_whisker/basic/",
                            "Boxplot - Scatter": "/reports/apexcharts/box_whisker/boxplot_scatter/",
                            "Horizontal Boxplot": "/reports/apexcharts/box_whisker/horizontal/"
                        },
                        "Pie/Donut": {
                            "Collection": "/reports/apexcharts/pie_donut/collection/",
                            "Simple Pie": "/reports/apexcharts/pie_donut/pie_basic/",
                            "Simple Donut": "/reports/apexcharts/pie_donut/donut_basic/",
                            "Donut Update": "/reports/apexcharts/pie_donut/donut_update/",
                            "Monochrome Pie": "/reports/apexcharts/pie_donut/pie_monochrome/",
                            "Gradient Donut": "/reports/apexcharts/pie_donut/donut_gradient/",
                            "Semi Donut": "/reports/apexcharts/pie_donut/donut_semi/",
                            "Donut with Pattern": "/reports/apexcharts/pie_donut/donut_pattern/",
                            "Pie with Image": "/reports/apexcharts/pie_donut/pie_image/"
                        },
                        "Radar": {
                            "Collection": "/reports/apexcharts/radar/collection/",
                            "Basic": "/reports/apexcharts/radar/basic/",
                            "Multiple Series": "/reports/apexcharts/radar/multiple_series/",
                            "Polygon-filled": "/reports/apexcharts/radar/polygon_filled/"
                        },
                        "Polar Area": {
                            "Collection": "/reports/apexcharts/polar_area/collection/",
                            "Basic": "/reports/apexcharts/polar_area/basic/",
                            "Monochrome": "/reports/apexcharts/polar_area/monochrome/"
                        },
                        "RadialBars/Cirle/Gauge": {
                            "Collection": "/reports/apexcharts/radialbar_circle/collection/",
                            "Basic": "/reports/apexcharts/radialbar_circle/basic/",
                            "Multiple": "/reports/apexcharts/radialbar_circle/multiple/",
                            "Custom Angle": "/reports/apexcharts/radialbar_circle/custom_angle/",
                            "Gradient": "/reports/apexcharts/radialbar_circle/gradient/",
                            "RadialBars with Image": "/reports/apexcharts/radialbar_circle/with_image/",
                            "Stroked Gauge": "/reports/apexcharts/radialbar_circle/stroked_gauge/",
                            "Semi Cirle Gauge": "/reports/apexcharts/radialbar_circle/semi_cirle_gauge/"
                        },
                        "Bubble": {
                            "Collection": "/reports/apexcharts/bubble/collection/",
                            "Simple": "/reports/apexcharts/bubble/basic/",
                            "3D Bubble": "/reports/apexcharts/bubble/3d/"
                        },
                        "Scatter": {
                            "Collection": "/reports/apexcharts/scatter/collection/",
                            "Basic": "/reports/apexcharts/scatter/basic/",
                            "Datetime": "/reports/apexcharts/scatter/datetime/",
                            "Images": "/reports/apexcharts/scatter/images/"
                        },
                        "HeatMap": {
                            "Collection": "/reports/apexcharts/heatmap/collection/",
                            "Basic": "/reports/apexcharts/heatmap/basic/",
                            "Basic - data rows to columns": "/reports/apexcharts/heatmap/basic_data_rows_to_columns/",
                            "Basic - transpose": "/reports/apexcharts/heatmap/basic_transpose/",
                            "Multi-Color": "/reports/apexcharts/heatmap/multi_color/",
                            "Multi-Color Flipped": "/reports/apexcharts/heatmap/multi_color_flipped/",
                            "Color Range": "/reports/apexcharts/heatmap/color_range/",
                            "Range without Shades": "/reports/apexcharts/heatmap/without_shades/"
                        },
                        "TreeMap": {
                            "Collection": "/reports/apexcharts/treemap/collection/",
                            "Basic": "/reports/apexcharts/treemap/basic/",
                            "Multiple Series": "/reports/apexcharts/treemap/multiple_series/",
                            "Color Range": "/reports/apexcharts/treemap/color_range/",
                            "Distributed": "/reports/apexcharts/treemap/distributed/"
                        },
                        "SparkLine": {
                            "Basic": "/reports/apexcharts/sparkline/basic/"
                        }
                    }
                }
            }        
        EOD;

        $menu = json_decode($reportJson, true);
        foreach ($menu as $section_name => $section) {
        ?>
            <h4 class="section-header"><?php echo $section_name; ?></h4>
            <div class="row">
                <?php
                foreach ($section as $group_name => $group) {
                    $hasChildArray = false;
                    foreach($group as $sname=>$surl) {
                        if(is_array($surl)) {
                            $hasChildArray = true;
                            break;
                        }
                    }
                ?>
                    <div class="col-md-3 example-group col-sm-6">
                        <h5>
                            <?php if ($hasChildArray) { ?>
                                <i class='fa fa-minus-square-o' data-toggle="collapse" onclick="toggleExpandCollapseAll(this);"></i>
                            <?php } ?>
                            <?php echo (strpos($group_name, "</i>") > 0) ? $group_name : "<i class='icon-layers'></i>$group_name"; ?></h5>
                        <ul class="list-unstyled">
                            <?php
                            foreach ($group as $sname => $surl) {
                                if (is_string($surl)) {
                            ?>
                                    <li><a href="<?php echo $root_url . $surl; ?>"><?php echo $sname; ?></a></li>
                                <?php
                                } else {
                                    $idName = $sname;
                                    $idName = str_replace(" ", "", $idName);
                                    $idName = str_replace("/", "", $idName);
                                    $idName = str_replace("&", "", $idName);
                                ?>
                                    <li>
                                        <strong><i class='fa fa-minus-square-o expand-collapse' data-toggle="collapse" data-target="#<?php echo $idName; ?>" onclick="toggleExpandCollapse(this);"></i> <?php echo $sname; ?></strong>
                                        <ul class="list-unstyled collapse show" id="<?php echo $idName; ?>">
                                            <?php
                                            foreach ($surl as $tname => $turl) {
                                            ?>
                                                <li><a href="<?php echo $root_url . $turl; ?>"><?php echo $tname; ?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>
    </main>
</body>

</html>