<?php
// ==========================
// CONFIGURACIÓN
// ==========================
$CUIT   = "30716616440";  // Reemplazar con el CUIT real
$SECRET = "OBER@MIS@2025";   // Reemplazar con el secret real
$PIPEDRIVE_API_KEY = "199d22fb1c8959644dcdc8daa8b86bb9ded48e1f";

// ==========================
// MAPEO DE TIPO DE DOCUMENTO
// ==========================
$tipoDocumentoMap = [
    "40" => 0,
    "41" => 1,
    "42" => 2,
    "43" => 3,
    "44" => 4,
    "45" => 5,
    "46" => 6,
    "47" => 7,
    "48" => 8,
    "49" => 9,
    "50" => 10,
    "51" => 11,
    "52" => 12,
    "53" => 13,
    "54" => 14,
    "55" => 16,
    "56" => 17,
    "57" => 18,
    "58" => 19,
    "59" => 20,
    "60" => 21,
    "61" => 22,
    "62" => 23,
    "63" => 24,
    "64" => 30,
    "65" => 80,
    "66" => 86,
    "67" => 87,
    "68" => 89,
    "69" => 90,
    "70" => 91,
    "71" => 93,
    "72" => 94,
    "73" => 95,
    "74" => 96,
    "75" => 99,
];

// ==========================
// MAPEO DE TIPO IVA
// ==========================
$tipoIvaMap = [
    "76" => "RI",
    "77" => "MO",
    "78" => "EX",
    "79" => "CF",
    "80" => "NC",
];

// ==========================
// MAPEO DE PROVINCIAS
// ==========================
$provinciaMap = [
    "591" => "CABA",
    "592" => "BA",
    "593" => "CAT",
    "594" => "CDB",
    "595" => "COR",
    "596" => "CHA",
    "597" => "CHU",
    "598" => "ER",
    "599" => "FOR",
    "600" => "JUJ",
    "601" => "LP",
    "602" => "LR",
    "603" => "MEN",
    "604" => "MIS",
    "605" => "NEU",
    "606" => "RN",
    "607" => "SAL",
    "608" => "SJ",
    "609" => "SL",
    "610" => "SC",
    "611" => "SF",
    "612" => "SE",
    "613" => "TF",
    "614" => "TUC",
];

// ==========================
// MAPEO DE SUCURSALES
// ==========================
$sucursalMap = [
    "617" => 4,
    "618" => 5,
    "619" => 6,
];

// ==========================
// MAPEO DE CARTERA
// ==========================
$carteraMap = [
    "620" => 5,
    "621" => 7,
    "622" => 4,
    "623" => 2,
    "624" => 8,
    "625" => 3,
    "626" => 10,
    "627" => 6,
    "628" => 9,
    "629" => 1,
    "630" => 11,
    "631" => 15,
    "632" => 17,
];

// ==========================
// MAPEO DE MODELOS
// ==========================
$modeloMap = [
    "633" => 1,
    "634" => 2,
    "635" => 3,
    "636" => 4,
    "637" => 5,
    "638" => 6,
    "639" => 7,
    "640" => 8,
    "641" => 9,
    "642" => 10,
    "643" => 11,
    "644" => 12,
    "645" => 13,
    "646" => 14,
    "647" => 15,
    "648" => 16,
    "649" => 17,
    "650" => 18,
    "651" => 19,
    "652" => 20,
    "653" => 21,
    "654" => 22,
    "655" => 23,
    "656" => 24,
    "657" => 25,
    "658" => 26,
    "659" => 27,
    "660" => 28,
    "661" => 29,
    "662" => 30,
    "663" => 31,
    "664" => 32,
    "665" => 33,
    "666" => 34,
    "667" => 35,
    "668" => 36,
    "669" => 37,
    "670" => 38,
    "671" => 39,
    "672" => 40,
    "673" => 41,
    "674" => 42,
    "675" => 43,
    "676" => 44,
    "677" => 45,
    "678" => 46,
    "679" => 47,
    "680" => 48,
    "681" => 49,
    "682" => 50,
    "683" => 51,
    "684" => 52,
    "685" => 53,
    "686" => 54,
    "687" => 55,
    "688" => 56,
    "689" => 57,
    "690" => 58,
];

// ==========================
// MAPEO DE LOCALIDADES
// ==========================
$localidadMap = [
    "81" => 12395,
    "82" => 12396,
    "83" => 12397,
    "84"        => 12398,
    "85"  => 12399,
    "86"       => 12400,
    "87"        => 12401,
    "88"       => 12402,
    "89" => 12403,
    "90"         => 12404,
    "91"   => 12405,
    "92"       => 12406,
    "93"  => 12407,
    "94"       => 12408,
    "95"     => 12409,
    "96"        => 12410,
    "97" => 12411,
    "98"         => 12412,
    "99"           => 12413,
    "100" => 12414,
    "101"     => 12415,
    "102"    => 12416,
    "103" => 12417,
    "104"   => 12418,
    "105"=> 12419,
    "106"=>12420,
    "107"     => 12421,
    "108"   => 12422,
    "109"  => 12423,
    "110"=>12424,
    "111"=>12425,
    "112"            => 12426,
    "113"    => 12427,
    "114"     => 12428,
    "115"     => 12429,
    "116" => 12430,
    "117"         => 12431,
    "118"         => 12432,
    "119"        => 12433,
    "120"        => 12434,
    "121"        => 12435,
    "122"     => 12436,
    "123"         => 12437,
    "124"      => 12438,
    "125"=>12439,
    "126"=>12440,
    "127"         => 12441,
    "128"   => 12442,
    "129"=>12443,
    "130"  => 12444,
    "131"      => 12445,
    "132"         => 12446,
    "133"          => 12447,
    "134"           => 12448,
    "135"         => 12449,
    "136"          => 12450,
    "137"=>12451,
    "138"   => 12452,
    "139"=>12453,
    "140"     => 12454,
    "141"     => 12455,
    "142"      => 12456,
    "143" => 12457,
    "144"   => 12458,
    "145" => 12459,
    "146"      => 12460,
    "147"    => 12461,
    "148"       => 12462,
    "149"          => 12463,
    "150"      => 12464,
    "151"=>12465,
    "152"           => 12466,
    "153"         => 12467,
    "154"       => 12468,
    "155"   => 12469,
    "156"   => 12470,
    "157"          => 12471,
    "158"=>12472,
    "159"        => 12473,
    "160"       => 12474,
    "161"       => 12475,
    "162"       => 12476,
    "163"         => 12477,
    "164"           => 12478,
    "165"  => 12479,
    "166"  => 12480,
    "167"  => 12481,
    "168"   => 12482,
    "169"=>12483,
    "170"=>12484,
    "171"=>12485,
    "172"=>12486,
    "173"   => 12487,
    "174"    => 12488,
    "175" => 12489,
    "176"=>12490,
    "177"=>12491,
    "178"    => 12492,
    "179" => 12493,
    "180"    => 12494,
    "181"  => 12495,
    "182"=>12496,
    "183"    => 12497,
    "184"=>12498,
    "185"=>12499,
    "186"=>12500,
    "187"=>12501,
    "188"  => 12502,
    "189"=>12503,
    "190"  => 12504,
    "191"  => 12505,
    "192" => 12506,
    "193"  => 12507,
    "194"=>12508,
    "195" => 12509,
    "196" => 12510,
    "197"=>12511,
    "198"=>12512,
    "199"    => 12513,
    "200"=>12514,
    "201"=>12515,
    "202" => 12516,
    "203"  => 12517,
    "204"=>12518,
    "205"=>12519,
    "206"   => 12520,
    "207"  => 12521,
    "208"   => 12522,
    "209"   => 12523,
    "210"=>12524,
    "211"=>12525,
    "212"=>12526,
    "213"     => 12527,
    "214"=>12528,
    "215"=>12529,
    "216"=>12530,
    "217"=>12531,
    "218"=>12532,
    "219"    => 12533,
    "220"=>12534,
    "221"  => 12535,
    "222"=>12536,
    "223" => 12537,
    "224" => 12538,
    "225"=>12539,
    "226"=>12540,
    "227"=>12541,
    "228"           => 12542,
    "229"    => 12543,
    "230"  => 12544,
    "231"    => 12545,
    "232"        => 12546,
    "233"        => 12547,
    "234"            => 12548,
    "235"          => 12549,
    "236"       => 12550,
    "237"=>12551,
    "238"   => 12552,
    "239"      => 12553,
    "240"       => 12554,
    "241"         => 12555,
    "242"      => 12556,
    "243"     => 12557,
    "244"            => 12558,
    "245"       => 12559,
    "246"        => 12560,
    "247"     => 12561,
    "248"       => 12562,
    "249"        => 12563,
    "250"       => 12564,
    "251"    => 12565,
    "252"      => 12566,
    "253"        => 12567,
    "254"        => 12568,
    "255"       => 12569,
    "256"       => 12570,
    "257"      => 12571,
    "258"       => 12572,
    "259"         => 12573,
    "260"       => 12574,
    "261"      => 12575,
    "262"         => 12576,
    "263"    => 12577,
    "264"   => 12578,
    "265"=>12579,
    "266"=>12580,
    "267" =>12581,
    "268"=>12582,
    "269"         =>12583,
    "270"     =>12584,
    "271"=>12585,
    "272"          =>12586,
    "273"        =>12587,
    "274"          =>12588,
    "275" =>12589,
    "276"            =>12590,
    "277"        =>12591,
    "278"         =>12592,
    "279"           =>12593,
    "280"     =>12594,
    "281"   =>12595,
    "282"  =>12596,
    "283"=>12597,
    "284" =>12598,
    "285"  =>12599,
    "286"      =>12600,
    "287"        =>12601,
    "288"          =>12602,
    "289"         =>12603,
    "290"        =>12604,
    "291"         =>12605,
    "292"          =>12606,
    "293"=>12607,
    "294"          =>12608,
    "295"      =>12609,
    "296"      =>12610,
    "297"  =>12611,
    "298"=>12612,
    "299" =>12613,
    "300"=>12614,
    "301"   =>12615,
    "302"   =>12616,
    "303"       =>12617,
    "304"       =>12618,
    "305"     =>12619,
    "306"   =>12620,
    "307"=>12621,
    "308"     =>12622,
    "309"=>12623,
    "310"     =>12624,
    "311"     =>12625,
    "312"    =>12626,
    "313"     =>12627,
    "314"      =>12628,
    "315"    =>12629,
    "316"    =>12630,
    "317"    =>12631,
    "318"    =>12632,
    "319"     =>12633,
    "320"     =>12634,
    "321"      =>12635,
    "322"          =>12636,
    "323"          =>12637,
    "324"          =>12638,
    "325"            =>12639,
    "326"           =>12640,
    "327"                    => 12641,
    "328"                   => 12642,
    "329"                      => 12643,
    "330"                  => 12644,
    "331"                 => 12645,
    "332"                 => 12646,
    "333"                 => 12647,
    "334"                    => 12648,
    "335"                => 12649,
    "336"                     => 12650,
    "337"                   => 12651,
    "338"                      => 12652,
    "339"                     => 12653,
    "340"                => 12654,
    "341"                   => 12655,
    "342"               => 12656,
    "343"                 => 12657,
    "344"                 => 12658,
    "345"                    => 12659,
    "346"               => 12660,
    "347"               => 12661,
    "348"                      => 12662,
    "349"                     => 12663,
    "350"               => 12664,
    "351"               => 12665,
    "352"                    => 12666,
    "353"                       => 12667,
    "354"                 => 12668,
    "355"                 => 12669,
    "356"                   => 12670,
    "357"                     => 12671,
    "358"                     => 12672,
    "359"                      => 12673,
    "360"                      => 12674,
    "361"                       => 12675,
    "362"                        => 12676,
    "363"                       => 12677,
    "364"                       => 12678,
    "365"                    => 12679,
    "366"                      => 12680,
    "367"                  => 12681,
    "368"                        => 12682,
    "369"              => 12683,
    "370"                => 12684,
    "371"              => 12685,
    "372"               => 12686,
    "373"                     => 12687,
    "374"                      => 12688,
    "375"                 => 12689,
    "376"                => 12690,
    "377"                 => 12691,
    "378"                      => 12692,
    "379"                       => 12693,
    "380"                 => 12694,
    "381"                => 12695,
    "382"                   => 12696,
    "383"                   => 12697,
    "384"         => 12698,
    "385"          => 12699,
    "386"               => 12700,
    "387"                        => 12701,
    "388"                        => 12702,
    "389"                     => 12703,
    "390"                  => 12704,
    "391"      => 12705,
    "392"                 => 12706,
    "393"                       => 12707,
    "394"                      => 12708,
    "395"                  => 12709,
    "396"                      => 12710,
    "397"              => 12711,
    "398"          => 12712,
    "399"              => 12713,
    "400"               => 12714,
    "401"      => 12715,
    "402"                => 12716,
    "403"           => 12717,
    "404"                      => 12718,
    "405"   => 12719,
    "406"                 => 12720,
    "407"                     => 12721,
    "408"                     => 12722,
    "409"                  => 12723,
    "410"                   => 12724,
    "411"              => 12725,
    "412"              => 12726,
    "413"              => 12727,
    "414"            => 12728,
    "415"               => 12729,
    "416"              => 12730,
    "417"             => 12731,
    "418"                => 12732,
    "419"            => 12733,
    "420"              => 12734,
    "421"                  => 12735,
    "422"            => 12736,
    "423"            => 12737,
    "424"            => 12738,
    "425"            => 12739,
    "426"            => 12740,
    "427"                 => 12741,
    "428"           => 12742,
    "429"                => 12743,
    "430"               => 12744,
    "431"                 => 12745,
    "432"                     => 12746,
    "433"                     => 12747,
    "434"                     => 12748,
    "435"                        => 12749,
    "436"                   => 12750,
    "437"          => 12751,
    "438"                      => 12752,
    "439"                  => 12753,
    "440"                 => 12754,
    "441"                 => 12755,
    "442"              => 12756,
    "443"               => 12757,
    "444"               => 12758,
    "445"                => 12759,
    "446"                => 12760,
    "447"            => 12761,
    "448"                 => 12762,
    "449"               => 12763,
    "450"              => 12764,
    "451"                => 12765,
    "452"            => 12766,
    "453"              => 12767,
    "454"               => 12768,
    "455"                 => 12769,
    "456"            => 12770,
    "457"               => 12771,
    "458"                  => 12772,
    "459"             => 12773,
    "460"           => 12774,
    "461"                => 12775,
    "462"             => 12776,
    "463"                => 12777,
    "464"            => 12778,
    "465"                => 12779,
    "466"     => 12780,
    "467"                 => 12781,
    "468"               => 12782,
    "469"            => 12783,
    "470"                 => 12784,
    "471"              => 12785,
    "472"               => 12786,
    "473"                 => 12787,
    "474"                  => 12788,
    "475"              => 12789,
    "476"              => 12790,
    "477"               => 12791,
    "478"             => 12792,
    "479"                 => 12793,
    "480"             => 12794,
    "481"               => 12795,
    "482"               => 12796,
    "483"               => 12797,
    "484"               => 12798,
    "485"             => 12799,
    "486"               => 12800,
    "487"                 => 12801,
    "488"                  => 12802,
    "489"               => 12803,
    "490"                 => 12804,
    "491"               => 12805,
    "492"           => 12806,
    "493"           => 12807,
    "494"             => 12808,
    "495"            => 12809,
    "496"                 => 12810,
    "497"                 => 12811,
    "498"               => 12812,
    "499"              => 12813,
    "500"                 => 12814,
    "501"                 => 12815,
    "502"              => 12816,
    "503"                 => 12817,
    "504"           => 12818,
    "505"             => 12819,
    "506"           => 12820,
    "507"              => 12821,
    "508"          => 12822,
    "509"                  => 12823,
    "510"                   => 12824,
    "511"             => 12825,
    "512"              => 12826,
    "513"              => 12827,
    "514"                    => 12828,
    "515"                  => 12829,
    "516"                   => 12830,
    "517"                  => 12831,
    "518"                   => 12832,
    "519"        => 12833,
    "520"                  => 12834,
    "521"                  => 12835,
    "522"                   => 12836,
    "523"                   => 12837,
    "524"                   => 12838,
    "525"                     => 12839,
    "526"                     => 12840,
    "527"        => 12841,
    "528"                    => 12842,
    "529"                   => 12843,
    "530"                   => 12844,
    "531"                    => 12845,
    "532"                => 12846,
    "533"                  => 12847,
    "534"                    => 12848,
    "535"                   => 12849,
    "536"         => 12850,
    "537"           => 12851,
    "538"                   => 12852,
    "539"                   => 12853,
    "540"          => 12854,
    "541"                   => 12855,
    "542"                 => 12856,
    "543"                => 12857,
    "544"           => 12858,
    "545"             => 12859,
    "546"                  => 12860,
    "547"                 => 12861,
    "548"                      => 12862,
    "549"                    => 12863,
    "550"                       => 12864,
    "551"                    => 12865,
    "552"                        => 12866,
    "553"                     => 12867,
    "554"                       => 12868,
    "555"                      => 12869,
    "556"                        => 12870,
    "557"                => 12871,
    "558"               => 12872,
    "559"                   => 12873,
    "560"                 => 12874,
    "561"                => 12875,
    "562"                => 12876,
    "563"              => 12877,
    "564"                 => 12878,
    "565"              => 12879,
    "566"                 => 12880,
    "567"            => 12881,
    "568"                   => 12882,
    "569"                   => 12883,
    "570"                  => 12884,
    "571"               => 12885,
    "572"            => 12886,
    "573"          => 12887,
    "574"                 => 12888,
    "575"                => 12889,
    "576"                   => 12890,
    "577"                  => 12891,
    "578"                => 12892,
    "579"                  => 12893,
    "580"                    => 12894,
    "581"                   => 12895,
    "582"            => 12896,
    "583"                        => 12897,
    "584"                     => 12898,
    "585"                    => 12899,
    "586"                => 12900,
    "587"             => 12901,
    "588"         => 22829,
"589"          => -1
];

// ==========================
// MAPEO DE ESTADOS
// ==========================
$estadoMap = [
    "616" => 1,
];

// ==========================
// MAPEO DE CONDICIONES DE VENTA
// ==========================
$condVentaMap = [
    "615" => "Cuenta corriente",
];

// ==========================
// MAPEO DE PAÍSES
// ==========================
$paisMap = [
    "590" => 200,
];

// ==========================
// MAPEO DE CORPORATIVOS
// ==========================
$corporativoMap = [
    "38" => 1, // SI
    "39" => 0, // NO
];

// ==========================
// FUNCIONES AUXILIARES
// ==========================
function callPipedriveAPI($endpoint, $api_key) {
    $url = "https://api.pipedrive.com/v1/" . $endpoint . "?api_token=" . $api_key;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode == 200) {
        return json_decode($response, true);
    } else {
        error_log("Error en API Pipedrive - Endpoint: $endpoint - HTTP Code: $httpCode");
        return false;
    }
}

function getCustomFieldValue($data, $fieldKey) {
    // Primero buscar en campos personalizados
    if (isset($data[$fieldKey])) {
        return $data[$fieldKey];
    }
    
    // Buscar en custom_fields array si existe
    if (isset($data['custom_fields'])) {
        foreach ($data['custom_fields'] as $field) {
            if (isset($field['key']) && $field['key'] === $fieldKey) {
                return $field['value'];
            }
        }
    }
    
    // Buscar en el array principal si es un campo personalizado con ID
    if (isset($data[$fieldKey])) {
        return $data[$fieldKey];
    }
    
    return null;
}

function logDebug($message) {
    error_log(date('Y-m-d H:i:s') . " - " . $message);
}

// ==========================
// AUTENTICACIÓN GESTIONREAL
// ==========================
$fechaHoy = date("Y-m-d");
$usuario = $CUIT;
$tokenBase = $CUIT . $SECRET . $fechaHoy;
$contrasena = md5($tokenBase);

logDebug("=== AUTENTICACIÓN GESTIONREAL ===");
logDebug("CUIT: " . $CUIT);
logDebug("Fecha: " . $fechaHoy);
logDebug("MD5 generado: " . $contrasena);

// ==========================
// RECIBIR DATOS DE PIPEDRIVE
// ==========================
$input = file_get_contents("php://input");
$data  = json_decode($input, true);

logDebug("Datos recibidos de Pipedrive: " . json_encode($data));

// Obtener el ID del deal
if (isset($data["trato"]) && is_numeric($data["trato"])) {
    $deal_id = $data["trato"];
} elseif (isset($data["deal"]) && is_numeric($data["deal"])) {
    $deal_id = $data["deal"];
} elseif (isset($data["current"]) && isset($data["current"]["id"])) {
    $deal_id = $data["current"]["id"];
} else {
    http_response_code(400);
    echo json_encode(["error" => "ID de deal no proporcionado en formato esperado."]);
    logDebug("ERROR: ID de deal no proporcionado. Datos recibidos: " . json_encode($data));
    exit;
}

logDebug("Procesando deal ID: " . $deal_id);

// ==========================
// OBTENER DATOS DEL DEAL
// ==========================
$deal_data = callPipedriveAPI("deals/{$deal_id}", $PIPEDRIVE_API_KEY);

if (!$deal_data || !isset($deal_data['data'])) {
    http_response_code(500);
    echo json_encode(["error" => "Error al obtener datos del deal de Pipedrive"]);
    logDebug("ERROR: No se pudo obtener datos del deal");
    exit;
}

$deal = $deal_data['data'];
$person_id = $deal['person_id']['value'] ?? null;

if (empty($person_id)) {
    http_response_code(400);
    echo json_encode(["error" => "El deal no tiene una persona asociada"]);
    logDebug("ERROR: Deal sin persona asociada");
    exit;
}

logDebug("Person ID asociado: " . $person_id);

// ==========================
// OBTENER DATOS DE LA PERSONA
// ==========================
$person_data = callPipedriveAPI("persons/{$person_id}", $PIPEDRIVE_API_KEY);

if (!$person_data || !isset($person_data['data'])) {
    http_response_code(500);
    echo json_encode(["error" => "Error al obtener datos de la persona de Pipedrive"]);
    logDebug("ERROR: No se pudo obtener datos de la persona");
    exit;
}

$person = $person_data['data'];
logDebug("Persona obtenida: " . $person['name']);

// ==========================
// EXTRAER Y CONVERTIR CAMPOS
// ==========================

// Obtener email y teléfono primarios
$email = "";
$phone = "";

if (isset($person['email'])) {
    foreach ($person['email'] as $email_data) {
        if (isset($email_data['primary']) && $email_data['primary']) {
            $email = $email_data['value'];
            break;
        }
    }
    // Si no hay email primario, tomar el primero
    if (empty($email) && count($person['email']) > 0) {
        $email = $person['email'][0]['value'];
    }
}

if (isset($person['phone'])) {
    foreach ($person['phone'] as $phone_data) {
        if (isset($phone_data['primary']) && $phone_data['primary']) {
            $phone = $phone_data['value'];
            break;
        }
    }
    // Si no hay teléfono primario, tomar el primero
    if (empty($phone) && count($person['phone']) > 0) {
        $phone = $person['phone'][0]['value'];
    }
}

// Obtener valores de campos personalizados
$tipoDoc = getCustomFieldValue($person, "3cbc0ce6d5f8273c424e15326f7abf98db778999");
$tipoDocId = isset($tipoDocumentoMap[$tipoDoc]) ? $tipoDocumentoMap[$tipoDoc] : 99;

$numerodocumento = getCustomFieldValue($person, "12714bada69427c8e30467f7b25bd772de7b62a1");

$tipoIva = getCustomFieldValue($person, "8109e9738547e3edcfd058044f2cca05f6025ab4");
$tipoIvaId = isset($tipoIvaMap[$tipoIva]) ? $tipoIvaMap[$tipoIva] : "CF";

$domicilio = getCustomFieldValue($person, "3c7c18ea2955877438bef2681ed3f4cf4e063b90");
$cp = getCustomFieldValue($person, "297583b2c3c17ae86a7162a462951f897af51bb0");

$localidad = getCustomFieldValue($person, "3682d5b70313c7eb42dce3b091c64874d0a1df59");
$localidadId = isset($localidadMap[$localidad]) ? $localidadMap[$localidad] : null;

$pais = getCustomFieldValue($person, "d9c9dc0603c35de9c24cb6539e1437d92d1fbb81");
$paisId = isset($paisMap[$pais]) ? $paisMap[$pais] : 200;

$provincia = getCustomFieldValue($person, "7b10eb8681187ea7dc2e23d166a2b1f74a8447ec");
$provinciaId = isset($provinciaMap[$provincia]) ? $provinciaMap[$provincia] : null;

$cond_vta = getCustomFieldValue($person, "6a47adb804e8a091cc23ff7ba57fe118267d2b5b");
$cond_vta_value = isset($condVentaMap[$cond_vta]) ? $condVentaMap[$cond_vta] : "Cuenta Corriente";

$estado = getCustomFieldValue($person, "3fb2514f06716411a71637108b5a87747ed62fd4");
$estadoId = isset($estadoMap[$estado]) ? $estadoMap[$estado] : 1;

$sucursal = getCustomFieldValue($person, "8bbde979a06ec5e5ff2693d8aa031f8e2d3c02fb");
$sucursalId = isset($sucursalMap[$sucursal]) ? $sucursalMap[$sucursal] : null;

$corporativo = getCustomFieldValue($person, "7b08431508bc040e5ef9f613774e5417ded99f52");
$corporativoId = isset($corporativoMap[$corporativo]) ? $corporativoMap[$corporativo] : 0;

$lat = getCustomFieldValue($person, "9d65ac2fbaaf3551c7f76713178c19da32ff11fb");
$lng = getCustomFieldValue($person, "5097081f14f29eb616e9d1777200e5e826bea5b6");

$cartera = getCustomFieldValue($person, "ed8591757da3a43d8a96b47b3401b817da81fb99");
$carteraId = isset($carteraMap[$cartera]) ? $carteraMap[$cartera] : null;

$modelo = getCustomFieldValue($person, "37739fb39702a2d83af6cf3afed8807805046dc1");
$modeloId = isset($modeloMap[$modelo]) ? $modeloMap[$modelo] : null;

// Log de campos obtenidos
logDebug("Campos extraídos - Email: $email, Tel: $phone, TipoDoc: $tipoDocId, NroDoc: $numerodocumento");

// ==========================
// VALIDAR CAMPOS OBLIGATORIOS
// ==========================
$camposObligatorios = [
    'nombre' => $person['name'] ?? '',
    'numerodocumento' => $numerodocumento,
    'mail' => $email
];

$camposFaltantes = [];
foreach ($camposObligatorios as $campo => $valor) {
    if (empty($valor)) {
        $camposFaltantes[] = $campo;
    }
}

if (!empty($camposFaltantes)) {
    http_response_code(400);
    echo json_encode([
        "error" => "Campos obligatorios faltantes: " . implode(", ", $camposFaltantes),
        "person_data" => $person
    ]);
    logDebug("ERROR: Campos obligatorios faltantes: " . implode(", ", $camposFaltantes));
    exit;
}

// ==========================
// PREPARAR DATOS PARA GESTIONREAL
// ==========================
$payload = [
    "action"            => "new_cliente",
    "nombre"            => $person['name'] ?? "",
    "tipodocumento"     => $tipoDocId,
    "numerodocumento"   => $numerodocumento,
    "tipo_iva"          => $tipoIvaId,
    "domicilio"         => $domicilio ?? "",
    "cp"                => $cp ?? "",
    "localidad"         => $localidadId,
    "pais"              => $paisId,
    "provincia"         => $provinciaId ?? "",
    "mail"              => $email,
    "telefonos"         => $phone,
    "cond_vta"          => $cond_vta_value,
    "estado"            => $estadoId,
    "sucursal"          => $sucursalId,
    "corporativo"       => $corporativoId,
    "lat"               => $lat ?? "",
    "lng"               => $lng ?? "",
    "cartera"           => $carteraId,
    "modelo"            => $modeloId
];

// Limpiar payload de valores nulos
foreach ($payload as $key => $value) {
    if ($value === null) {
        $payload[$key] = "";
    }
}

logDebug("Payload para GestionReal: " . json_encode($payload));

// ==========================
// ENVIAR A API DE GESTIONREAL
// ==========================
$url = "https://api.gestionreal.com.ar/";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$usuario:$contrasena");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload)); // <-- JSON
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json' // <-- JSON
]);


logDebug("Enviando solicitud a GestionReal...");

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

logDebug("Respuesta de GestionReal - HTTP Code: $httpCode");
logDebug("Response: " . $response);

if ($error) {
    logDebug("Error cURL: " . $error);
}

// ==========================
// RESPUESTA
// ==========================
header("Content-Type: application/json");

if ($httpCode == 200) {
    $responseData = json_decode($response, true);
    $clienteNombre = trim($payload['nombre']);

    logDebug("Cliente creado en GestionReal: $clienteNombre. Esperando 5 segundos antes de buscarlo...");
    sleep(5); // Delay de 5 segundos

    // ==========================
    // CONSULTAR CLIENTE RECIÉN CREADO EN GESTIONREAL
    // ==========================
    $buscarPayload = [
        "action"         => "cliente",
        "tipo_documento" => $tipoDocId,
        "nro_documento"  => $numerodocumento
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, "$usuario:$contrasena");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($buscarPayload));
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    logDebug("Buscando cliente en GestionReal por tipo_documento + nro_documento...");
    $buscarResponse = curl_exec($ch);
    $httpCodeBuscar = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $errorBuscar = curl_error($ch);
    curl_close($ch);

    logDebug("Respuesta de búsqueda - HTTP Code: $httpCodeBuscar, Response: $buscarResponse");

    if ($httpCodeBuscar == 200) {
        $clienteData = json_decode($buscarResponse, true);
        if (isset($clienteData['clientes'][0]['idcustomer'])) {
    $cliente_id = $clienteData['clientes'][0]['idcustomer'];
    logDebug("Cliente encontrado con ID: $cliente_id");

            // ==========================
            // CREAR CASO EN GESTIONREAL
            // ==========================
            $descripcionCaso = base64_encode("Caso generado por Pipedrive para el cliente $clienteNombre");

            $casoPayload = [
                "action"      => "genera_reclamo",
                "cliente_id"  => $cliente_id,
                "creado_por"  => "Web",
                "via"         => "Interno",
                "descripcion" => $descripcionCaso
                "tipo_caso_id" => 2,  // fijo
                "grupo_id"     => 369  // fijo
            ];

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_USERPWD, "$usuario:$contrasena");
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($casoPayload));
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

            logDebug("Creando caso para el cliente $clienteNombre...");
            $casoResponse = curl_exec($ch);
            $httpCodeCaso = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $errorCaso = curl_error($ch);
            curl_close($ch);

            logDebug("Respuesta de creación de caso - HTTP Code: $httpCodeCaso, Response: $casoResponse");

        } else {
            logDebug("❌ No se encontró el cliente en GestionReal después de crear el perfil");
        }
    } else {
        logDebug("❌ Error al buscar cliente en GestionReal: $errorBuscar");
    }

    echo json_encode([
        "status"    => "success",
        "http_code" => $httpCode,
        "request"   => $payload,
        "response"  => $responseData
    ]);
    logDebug("✅ Solicitud exitosa a GestionReal");
}

?>
