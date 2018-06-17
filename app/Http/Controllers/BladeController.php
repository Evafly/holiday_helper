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
                    // $infos_data[$i]['cityName'] = (string)$info['cityName'];

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
                    // $infos_data[$i]['cityName'] = (string)$info['cityName'];

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
        $xml = XmlParser::load('xml/20180616.xml');
        $infos = $xml->getContent();

        $infos = $xml->getContent();
        $infos_data = array();
        $i = 0;
        foreach($infos as $info) {
            if ((string)$info['Train'] != "") {
                $infos_data[$i]['train'] = (string)$info['Train'];
                $i++;
            }
        }
        $data['infos'] = $infos_data;
        return View::make('trains',['data' => $data]);
    }

    public function weather()
    {
        return View('weather');
    }
}
