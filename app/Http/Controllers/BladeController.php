<?php

namespace App\Http\Controllers;

use View;

use Illuminate\Http\Request;

use XmlParser;

class BladeController extends Controller
{
    public function index()
    {
        return View('index');
    }

    public function entertainment()
    {
        return View('entertainment');
    }

    public function exhibition()
    {
        $keyword = $_GET['keyword'];
        $data = array();

        if ($keyword === 'art') {
            $data['title'] = '藝文展覽';
            $data['subtitle'] = '陶冶性情的好去處';
            $data['e_title'] = 'Art Exhibition';
        
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=6');
            $infos = $xml->getContent();

            $infos_data = array();
            $i = 0;
            foreach($infos as $info) {
                if ($info['imageUrl']!="") {
                    $infos_data[$i]['uid'] = (string)$info['UID'];
                    $infos_data[$i]['title'] = (string)$info['title'];
                    $infos_data[$i]['imageUrl'] = (string)$info['imageUrl'];
                    $infos_data[$i]['startY'] = substr((string)$info['startDate'],0,-6);
                    switch(substr((string)$info['startDate'],5,-3)){
                        case '01':
                            $infos_data[$i]['startM'] = 'January';
                        break;
                        case '02':
                            $infos_data[$i]['startM'] = 'Feburary';
                        break;
                        case '03':
                            $infos_data[$i]['startM'] = 'March';
                        break;
                        case '04':
                            $infos_data[$i]['startM'] = 'April';
                        break;
                        case '05':
                            $infos_data[$i]['startM'] = 'May';
                        break;
                        case '06':
                            $infos_data[$i]['startM'] = 'June';
                        break;
                        case '07':
                            $infos_data[$i]['startM'] = 'July';
                        break;
                        case '08':
                            $infos_data[$i]['startM'] = 'August';
                        break;
                        case '09':
                            $infos_data[$i]['startM'] = 'September';
                        break;
                        case '10':
                            $infos_data[$i]['startM'] = 'October';
                        break;
                        case '11':
                            $infos_data[$i]['startM'] = 'November';
                        break;
                        case '12':
                            $infos_data[$i]['startM'] = 'December';
                        break;

                    }
                    $infos_data[$i]['startD'] = substr((string)$info['startDate'],-2);


                    $i++;
                }
            }

         } elseif ($keyword === 'variety') {
            $data['title'] = '綜藝活動';
            $data['subtitle'] = '充電打氣的好選擇';
            $data['e_title'] = 'Variety Activity';
        
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=11');
            $infos = $xml->getContent();

            $infos_data = array();
            $i = 0;
            foreach($infos as $info) {
                if ($info['imageUrl']!="") {
                    $infos_data[$i]['uid'] = (string)$info['UID'];
                    $infos_data[$i]['title'] = (string)$info['title'];
                    $infos_data[$i]['imageUrl'] = (string)$info['imageUrl'];
                    $infos_data[$i]['startY'] = substr((string)$info['startDate'],0,-6);
                    switch(substr((string)$info['startDate'],5,-3)){
                        case '01':
                            $infos_data[$i]['startM'] = 'January';
                        break;
                        case '02':
                            $infos_data[$i]['startM'] = 'Feburary';
                        break;
                        case '03':
                            $infos_data[$i]['startM'] = 'March';
                        break;
                        case '04':
                            $infos_data[$i]['startM'] = 'April';
                        break;
                        case '05':
                            $infos_data[$i]['startM'] = 'May';
                        break;
                        case '06':
                            $infos_data[$i]['startM'] = 'June';
                        break;
                        case '07':
                            $infos_data[$i]['startM'] = 'July';
                        break;
                        case '08':
                            $infos_data[$i]['startM'] = 'August';
                        break;
                        case '09':
                            $infos_data[$i]['startM'] = 'September';
                        break;
                        case '10':
                            $infos_data[$i]['startM'] = 'October';
                        break;
                        case '11':
                            $infos_data[$i]['startM'] = 'November';
                        break;
                        case '12':
                            $infos_data[$i]['startM'] = 'December';
                        break;

                    }
                    $infos_data[$i]['startD'] = substr((string)$info['startDate'],-2);

                    $i++;
                }
            }

         }
        $data['infos'] = $infos_data;
        
        return View::make('exhibition',['data' => $data]);
    }
    public function exhibitionDetail()
    {
        $keyword = $_GET['keyword'];
        $uid = $_GET['uid'];
        $data = array();

        if ($keyword === 'art') {
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=6');
            $infos = $xml->getContent();

            // $infos_data = array();
            // $i = 0;
            foreach($infos as $info) {
                if ((string)$info['UID'] === $uid) {
                    $data['title'] = (string)$info['title'];
                    $data['imageUrl'] = (string)$info['imageUrl'];
                    $data['promoteUrl'] = (string)$info['sourceWebPromote'];
                    $data['sourceName'] = (string)$info['sourceWebName'];
                    $data['startD'] = (string)$info['startDate'];
                    $data['endD'] = (string)$info['endDate'];
                    $data['des'] = (string)$info['descriptionFilterHtml'];
                    $data['saleUrl'] = (string)$info['webSales'];
                    $data['editT'] = (string)$info['editModifyDate'];
                    $data['category'] = (string)$info['category'];
                    $data['showUnit'] = (string)$info['showUnit'];
                    // $i++;
                }
            }

         } elseif ($keyword === 'variety') {
        
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=11');
            $infos = $xml->getContent();

            // $infos_data = array();
            // $i = 0;
            foreach($infos as $info) {
                if ((string)$info['UID'] === $uid) {
                    $data['title'] = (string)$info['title'];
                    $data['imageUrl'] = (string)$info['imageUrl'];
                    $data['promoteUrl'] = (string)$info['sourceWebPromote'];
                    $data['sourceName'] = (string)$info['sourceWebName'];
                    $data['startD'] = (string)$info['startDate'];
                    $data['endD'] = (string)$info['endDate'];
                    $data['des'] = (string)$info['descriptionFilterHtml'];
                    $data['saleUrl'] = (string)$info['webSales'];
                    $data['editT'] = (string)$info['editModifyDate'];
                    $data['category'] = (string)$info['category'];
                    $data['showUnit'] = (string)$info['showUnit'];
                    // $i++;
                }
            }

         }
        
        // $data['infos'] = $infos_data;
        
        return View::make('exhibition_detail',['data' => $data]);
    }

    public function transport()
    {
        return View('transport');
    }
    
    public function trains()
    {
        $data = array();
        // $sta = "";
        // if (isset($_GET['STA'])) {
            // $sta = $_GET['STA'];
        // }
        $xml = XmlParser::load('xml/trains_20180616.xml');
        $infos = $xml->getContent();
        // $station_data = file('json/stations.json');
        $station_data = json_decode(file_get_contents('json/stations.json'),true);
        // dd($station_data);

        $infos_data = array();
        $infos_trains_data = array();
        $i = 0;
        $j = 0;
        $k = 0;
        $x = 0;
        // foreach($infos as $infoT){
        //     if($sta === (string)$infos->TimeInfo['Station']){
        //         $infos_trains_data[$x]['staNum'] = (string)$infoT['Train'];
        //     }
        //     $x++;
        // }
        // dd($sta);
        foreach($infos as $info) {
            // if($sta === (string)$info2['Station']){
            //     $infos_trains_data[$j]['staNum'] = (string)$info['Train'];
            // }
            if ((string)$info['Train'] != "") {
                $infos_data[$i]['train'] = (string)$info['Train'];
                $infos_data[$i]['carclass'] = (string)$info['CarClass'];
                $infos_data[$i]['lineDir'] = (string)$info['LineDir'];
                $infos_data[$i]['line'] = (string)$info['Line'];
                
                //列車種類
                switch ($infos_data[$i]['carclass']) {
                    case '1100':
                        $infos_data[$i]['carclass'] = "自強(DMU2800、2900、3000型柴聯及 EMU型電車自強號)";
                    break;
                    case '1101':
                        $infos_data[$i]['carclass'] = "自強(推拉式自強號)";
                    break;
                    case '1102':
                        $infos_data[$i]['carclass'] = "自強(太魯閣)";
                    break;
                    case '1103':
                        $infos_data[$i]['carclass'] = "自強(DMU3100型柴聯自強號)";
                    break;
                    case '1107':
                        $infos_data[$i]['carclass'] = "自強(普悠瑪)";
                    break;
                    case '1108':
                        $infos_data[$i]['carclass'] = "自強(推拉式自強號且無自行車車廂)";
                    break;
                    case '1109':
                        $infos_data[$i]['carclass'] = "自強(PP親) 有身障位";
                    break;
                    case '110A':
                        $infos_data[$i]['carclass'] = "自強(PP障12) 有身障位";
                    break;
                    case '110B':
                        $infos_data[$i]['carclass'] = "自強(E12)";
                    break;
                    case '110C':
                        $infos_data[$i]['carclass'] = "自強(E3)";
                    break;
                    case '110D':
                        $infos_data[$i]['carclass'] = "自強(D28)";
                    break;
                    case '110E':
                        $infos_data[$i]['carclass'] = "自強(D29)";
                    break;
                    case '110F':
                        $infos_data[$i]['carclass'] = "自強(D31障) 有身障位";
                    break;
                    case '1110':
                        $infos_data[$i]['carclass'] = "莒光(無身障座位)";
                    break;
                    case '1111':
                        $infos_data[$i]['carclass'] = "莒光(有身障座位)";
                    break;
                    case '1114':
                        $infos_data[$i]['carclass'] = "莒光(無身障座位 ,有自行車車廂)";
                    break;
                    case '1115':
                        $infos_data[$i]['carclass'] = "莒光(有身障座位 ,有自行車車廂)";
                    break;
                    case '1120':
                        $infos_data[$i]['carclass'] = "復興";
                    break;
                    case '1131':
                        $infos_data[$i]['carclass'] = "區間車";
                    break;
                    case '1132':
                        $infos_data[$i]['carclass'] = "區間快";
                    break;
                    case '1140':
                        $infos_data[$i]['carclass'] = "普快車";
                    break;
                }
                
                //行駛方向
                if($infos_data[$i]['lineDir'] === "0"){
                    $infos_data[$i]['lineDir'] = "順時針";
                } 
                else{
                    $infos_data[$i]['lineDir'] = "逆時針";
                }

                //有無經過山海線
                if($infos_data[$i]['line'] === "0"){
                    $infos_data[$i]['line'] = "無經過";
                }elseif($infos_data[$i]['line'] === "1"){
                    $infos_data[$i]['line'] = "山線";
                }else{
                    $infos_data[$i]['line'] = "海線";
                }
                foreach($info->TimeInfo as $info2){
                        $infos_data[$i]['arrtime'][$j] = substr((string)$info2['ARRTime'],0,-3);
                    foreach ($station_data as $stationDT) {
                        if((string)$station_data[$k]['id'] === (string)$info2['Station']){
                            $infos_data[$i]['traininfo'][$j] = (string)$stationDT['name'];
                        }
                        // dd($station_data[$k]['id']);
                        $k++;
                        // dd($info2['Station']);
                    }
                    $k = 0;
                    $j++;
                    // dd($infos_trains_data);
                }
                $j = 0;
                $i++;
            }
        }
        // dd($infos_data);
        $data['infos'] = $infos_data;
        $data['stationData'] = $station_data;
        return View::make('trains',['data' => $data]);
    }

    public function weather()
    {
        return View('weather');
    }
    public function Forecast36()
    {
            $loca = "";
            if (isset($_GET['loca'])) {
                $loca = $_GET['loca'];
            }
            $data = array();
            $xml = XmlParser::load('xml/forecast_36hr.xml');
            $infos = $xml->getContent();
            // dd($infos);
            $infos_data = array();
            $infos_weather_data = array();
            $i = 0;
            $j = 0;
            $k = 0;
            $x = 0;
            $data['datasetTitle'] = (string)$infos->dataset->datasetInfo->datasetDescription;
            $data['issueTime'] = (string)$infos->dataset->datasetInfo->issueTime;
            $data['updateTime'] = (string)$infos->dataset->datasetInfo->update;
            foreach($infos->dataset->location as $infoW){
                if((string)$infoW->locationName != ""){
                    $infos_weather_data[$x]['location'] = (string)$infoW->locationName;
                }
                $x++;
            }
            if($loca != ""){
                foreach($infos->dataset->location as $info) {
                    if ((string)$info->locationName !="" && preg_match('/'.$loca.'/i',(string)$info->locationName)) {
                        // dd($info);
                        $infos_data[$i]['location'] = (string)$info->locationName;
                        foreach($info->weatherElement as $info2) {
                            foreach($info2->time as $info3){
                                $infos_data[$i]['wx'][$j]['weather'][$k] = (string)$info3->parameter->parameterName;
                                $k++;
                            }
                            $j++;
                            $k=0;
                        }
                        $i++;
                        $j=0;
                    }
                }
            }else{
                foreach($infos->dataset->location as $info) {
                    if ((string)$info->locationName !="") {
                        $infos_data[$i]['location'] = (string)$info->locationName;
                        foreach($info->weatherElement as $info2) {
                            foreach($info2->time as $info3){
                                $infos_data[$i]['wx'][$j]['weather'][$k] = (string)$info3->parameter->parameterName;
                                $k++;
                            }
                            $j++;
                            $k=0;
                        }
                        $i++;
                        $j=0;
                    }
                }
            }
            $data['infos'] = $infos_data;
            $data['infos2'] = $infos_weather_data;
        // dd($infos_data);
        return View::make('/forecast36',['data' => $data]);
    }
}
