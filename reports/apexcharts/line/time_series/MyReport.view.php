<div class="container report-content">
    <div class="text-center">
        <h1>LineChart</h1>
        <p class="lead">
            This example shows how to create beautiful LineChart
        </p>
    </div>
    <style>
        .apexcharts-canvas {
            margin: 0 auto;
        }
    </style>
    <div style="margin-bottom:50px;">
        <?php
        $stock_prices = [
            [
                'date' => '2014-01-01',
                'value' => 150000000
            ],
            [
                'date' => '2014-01-02',
                'value' => 160379978
            ],
            [
                'date' => '2014-01-03',
                'value' => 170493749
            ],
            [
                'date' => '2014-01-04',
                'value' => 160785250
            ],
            [
                'date' => '2014-01-05',
                'value' => 167391904
            ],
            [
                'date' => '2014-01-06',
                'value' => 161576838
            ],
            [
                'date' => '2014-01-07',
                'value' => 161413854
            ],
            [
                'date' => '2014-01-08',
                'value' => 152177211
            ],
            [
                'date' => '2014-01-09',
                'value' => 140762210
            ],
            [
                'date' => '2014-01-10',
                'value' => 144381072
            ],
            [
                'date' => '2014-01-11',
                'value' => 154352310
            ],
            [
                'date' => '2014-01-12',
                'value' => 165531790
            ],
            [
                'date' => '2014-01-13',
                'value' => 175748881
            ],
            [
                'date' => '2014-01-14',
                'value' => 187064037
            ],
            [
                'date' => '2014-01-15',
                'value' => 197520685
            ],
            [
                'date' => '2014-01-16',
                'value' => 210176418
            ],
            [
                'date' => '2014-01-17',
                'value' => 196122924
            ],
            [
                'date' => '2014-01-18',
                'value' => 207337480
            ],
            [
                'date' => '2014-01-19',
                'value' => 200258882
            ],
            [
                'date' => '2014-01-20',
                'value' => 186829538
            ],
            [
                'date' => '2014-01-21',
                'value' => 192456897
            ],
            [
                'date' => '2014-01-22',
                'value' => 204299711
            ],
            [
                'date' => '2014-01-23',
                'value' => 192759017
            ],
            [
                'date' => '2014-01-24',
                'value' => 203596183
            ],
            [
                'date' => '2014-01-25',
                'value' => 208107346
            ],
            [
                'date' => '2014-01-26',
                'value' => 196359852
            ],
            [
                'date' => '2014-01-27',
                'value' => 192570783
            ],
            [
                'date' => '2014-01-28',
                'value' => 177967768
            ],
            [
                'date' => '2014-01-29',
                'value' => 190632803
            ],
            [
                'date' => '2014-01-30',
                'value' => 203725316
            ],
            [
                'date' => '2014-01-31',
                'value' => 218226177
            ],
            [
                'date' => '2014-02-01',
                'value' => 210698669
            ],
            [
                'date' => '2014-02-02',
                'value' => 217640656
            ],
            [
                'date' => '2014-02-03',
                'value' => 216142362
            ],
            [
                'date' => '2014-02-04',
                'value' => 201410971
            ],
            [
                'date' => '2014-02-05',
                'value' => 196704289
            ],
            [
                'date' => '2014-02-06',
                'value' => 190436945
            ],
            [
                'date' => '2014-02-07',
                'value' => 178891686
            ],
            [
                'date' => '2014-02-08',
                'value' => 171613962
            ],
            [
                'date' => '2014-02-09',
                'value' => 157579773
            ],
            [
                'date' => '2014-02-10',
                'value' => 158677098
            ],
            [
                'date' => '2014-02-11',
                'value' => 147129977
            ],
            [
                'date' => '2014-02-12',
                'value' => 151561876
            ],
            [
                'date' => '2014-02-13',
                'value' => 151627421
            ],
            [
                'date' => '2014-02-14',
                'value' => 143543872
            ],
            [
                'date' => '2014-02-15',
                'value' => 136581057
            ],
            [
                'date' => '2014-02-16',
                'value' => 135560715
            ],
            [
                'date' => '2014-02-17',
                'value' => 122625263
            ],
            [
                'date' => '2014-02-18',
                'value' => 112091484
            ],
            [
                'date' => '2014-02-19',
                'value' => 98810329
            ],
            [
                'date' => '2014-02-20',
                'value' => 99882912
            ],
            [
                'date' => '2014-02-21',
                'value' => 94943095
            ],
            [
                'date' => '2014-02-22',
                'value' => 104875743
            ],
            [
                'date' => '2014-02-23',
                'value' => 116383678
            ],
            [
                'date' => '2014-02-24',
                'value' => 125028841
            ],
            [
                'date' => '2014-02-25',
                'value' => 123967310
            ],
            [
                'date' => '2014-02-26',
                'value' => 133167029
            ],
            [
                'date' => '2014-02-27',
                'value' => 128577263
            ],
            [
                'date' => '2014-02-28',
                'value' => 115836969
            ],
            [
                'date' => '2014-03-01',
                'value' => 119264529
            ],
            [
                'date' => '2014-03-02',
                'value' => 109363374
            ],
            [
                'date' => '2014-03-03',
                'value' => 113985628
            ],
            [
                'date' => '2014-03-04',
                'value' => 114650999
            ],
            [
                'date' => '2014-03-05',
                'value' => 110866108
            ],
            [
                'date' => '2014-03-06',
                'value' => 96473454
            ],
            [
                'date' => '2014-03-07',
                'value' => 104075886
            ],
            [
                'date' => '2014-03-08',
                'value' => 103568384
            ],
            [
                'date' => '2014-03-09',
                'value' => 101534883
            ],
            [
                'date' => '2014-03-10',
                'value' => 115825447
            ],
            [
                'date' => '2014-03-11',
                'value' => 126133916
            ],
            [
                'date' => '2014-03-12',
                'value' => 116502109
            ],
            [
                'date' => '2014-03-13',
                'value' => 130169411
            ],
            [
                'date' => '2014-03-14',
                'value' => 124296886
            ],
            [
                'date' => '2014-03-15',
                'value' => 126347399
            ],
            [
                'date' => '2014-03-16',
                'value' => 131483669
            ],
            [
                'date' => '2014-03-17',
                'value' => 142811333
            ],
            [
                'date' => '2014-03-18',
                'value' => 129675396
            ],
            [
                'date' => '2014-03-19',
                'value' => 115514483
            ],
            [
                'date' => '2014-03-20',
                'value' => 117630630
            ],
            [
                'date' => '2014-03-21',
                'value' => 122340239
            ],
            [
                'date' => '2014-03-22',
                'value' => 132349091
            ],
            [
                'date' => '2014-03-23',
                'value' => 125613305
            ],
            [
                'date' => '2014-03-24',
                'value' => 135592466
            ],
            [
                'date' => '2014-03-25',
                'value' => 123408762
            ],
            [
                'date' => '2014-03-26',
                'value' => 111991454
            ],
            [
                'date' => '2014-03-27',
                'value' => 116123955
            ],
            [
                'date' => '2014-03-28',
                'value' => 112817214
            ],
            [
                'date' => '2014-03-29',
                'value' => 113029590
            ],
            [
                'date' => '2014-03-30',
                'value' => 108753398
            ],
            [
                'date' => '2014-03-31',
                'value' => 99383763
            ],
            [
                'date' => '2014-04-01',
                'value' => 100151737
            ],
            [
                'date' => '2014-04-02',
                'value' => 94985209
            ],
            [
                'date' => '2014-04-03',
                'value' => 82913669
            ],
            [
                'date' => '2014-04-04',
                'value' => 78748268
            ],
            [
                'date' => '2014-04-05',
                'value' => 63829135
            ],
            [
                'date' => '2014-04-06',
                'value' => 78694727
            ],
            [
                'date' => '2014-04-07',
                'value' => 80868994
            ],
            [
                'date' => '2014-04-08',
                'value' => 93799013
            ],
            [
                'date' => '2014-04-09',
                'value' => 99042416
            ],
            [
                'date' => '2014-04-10',
                'value' => 97298692
            ],
            [
                'date' => '2014-04-11',
                'value' => 83353499
            ],
            [
                'date' => '2014-04-12',
                'value' => 71248129
            ],
            [
                'date' => '2014-04-13',
                'value' => 75253744
            ],
            [
                'date' => '2014-04-14',
                'value' => 68976648
            ],
            [
                'date' => '2014-04-15',
                'value' => 71002284
            ],
            [
                'date' => '2014-04-16',
                'value' => 75052401
            ],
            [
                'date' => '2014-04-17',
                'value' => 83894030
            ],
            [
                'date' => '2014-04-18',
                'value' => 90236528
            ],
            [
                'date' => '2014-04-19',
                'value' => 99739114
            ],
            [
                'date' => '2014-04-20',
                'value' => 96407136
            ],
            [
                'date' => '2014-04-21',
                'value' => 108323177
            ],
            [
                'date' => '2014-04-22',
                'value' => 101578914
            ],
            [
                'date' => '2014-04-23',
                'value' => 115877608
            ],
            [
                'date' => '2014-04-24',
                'value' => 112088857
            ],
            [
                'date' => '2014-04-25',
                'value' => 112071353
            ],
            [
                'date' => '2014-04-26',
                'value' => 101790062
            ],
            [
                'date' => '2014-04-27',
                'value' => 115003761
            ],
            [
                'date' => '2014-04-28',
                'value' => 120457727
            ],
            [
                'date' => '2014-04-29',
                'value' => 118253926
            ],
            [
                'date' => '2014-04-30',
                'value' => 117956992
            ]
        ];
        \koolreport\apexcharts\AreaChart::create(array(
            "title" => "Stock Price Movement",
            "dataSource" => $stock_prices,
            "columns" => array(
                "date" => [
                    "label" => "Date",
                    "categoryType" => "datetime",
                ],
                "value" => array(
                    "label" => "Stock Price",
                    "type" => "number",
                ),
            ),
            "options" => [
                'chart' => [
                    'zoom' => [
                        'type' => 'x',
                        'enabled' => true,
                        'autoScaleYaxis' => true
                    ],
                    'toolbar | autoSelected' => 'zoom',
                ],
                'fill | gradient' => [
                    'shadeIntensity' => 1,
                    'inverseColors' => false,
                    'opacityFrom' => 0.5,
                    'opacityTo' => 0,
                    'stops' => [
                        0,
                        90,
                        100
                    ]
                ],
                'yaxis | labels | formatter' => "function (val) {
                    return (val / 1000000).toFixed(0);
                }",
                'tooltip' => [
                    'shared' => false,
                    'y | formatter' => "function (val) {
                        return (val / 1000000).toFixed(0)
                    }",
                ]
            ],
            // "xTitle" => "Month",
            "yTitle" => "Price",
            'fillType' => 'gradient',
            "showLegend" => false,
            // "showLabel" => true,
            // "height" => "600px",
            "maxWidth" => 800,
        ));
        ?>
    </div>

</div>