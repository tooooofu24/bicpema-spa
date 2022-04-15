<?php

namespace Database\Factories;

class PostFactoryData
{
    const IMAGEURLS = [
        'https://images.unsplash.com/photo-1648737965955-735637020c7a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80',
        'https://images.unsplash.com/photo-1649937366177-17545e88b20c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
        'https://images.unsplash.com/photo-1649977107006-b769969c9725?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
        'https://images.unsplash.com/photo-1649967187303-b2f7a0dfd240?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80',
        'https://images.unsplash.com/photo-1649941923250-ea7e579255b3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1638913659197-46040471de1d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1649912904854-33e1fa0defb0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=725&q=80',
        'https://images.unsplash.com/photo-1649861304635-538356e2ee2b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1649957909636-10a8b37d052e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1649948043343-6e8012afb14b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1011&q=80',
        'https://images.unsplash.com/photo-1649949474530-51fd3d999837?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1649950084274-6435608c30ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80',
        'https://images.unsplash.com/photo-1649955838965-e0486b5c7a4d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1649565023079-56bac30e38ad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80',
        'https://images.unsplash.com/photo-1649829809465-d358fce60ebd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1638887140757-9462efdfbba6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80',
        'https://images.unsplash.com/photo-1648737119247-e93f56878edf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80',
        'https://images.unsplash.com/photo-1649820615809-626afd221076?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=867&q=80',
        'https://images.unsplash.com/photo-1649861303983-11b297ad5f23?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=838&q=80',
        'https://images.unsplash.com/photo-1649733484875-2e837f5b640b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80',
        'https://images.unsplash.com/photo-1649790442619-39d05db11246?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1648737155328-0c0012cf2f20?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1638913976381-5b8ed66c36d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1648737966316-864c713a8356?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1643064723511-8e2483fab2ad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1649859026665-7ada1957c285?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80',
        'https://images.unsplash.com/photo-1649882453807-6c902d536b4e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1649854248815-52690cba5d43?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1649852010625-761f10ffdc06?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80',
        'https://images.unsplash.com/photo-1649780490583-12122384abda?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=867&q=80',
        'https://images.unsplash.com/photo-1649856392829-e1d636b47432?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1638913662180-afc4334cf422?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1649878195726-2d4cf571f904?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        'https://images.unsplash.com/photo-1649899019044-445d88bc0a0f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80',
    ];

    const ARENAMES = [
        "風やゴムの働き",
        "振り子の運動",
        "てこの規則性",
        "電気の通り道",
        "磁石の性質",
        "電気の働き",
        "電流の働き",
        "電気の利用",
        "光の性質",
        "力と圧力",
        "運動の規則性",
        "力学的エネルギー",
        "エネルギー",
        "電流",
        "電流と磁界",
        "光と音",
        "力学",
        "熱力学",
        "電磁気学",
        "波動",
        "物と重さ",
        "空気と水の性質",
        "金属、水、空気と温度",
        "物の溶け方",
        "燃焼の仕組み",
        "水溶性の性質",
        "物質のすがた",
        "水溶液",
        "状態変化",
        "物質の成り立ち",
        "化学変化",
        "化学変化と物質の質量",
        "水溶液とイオン",
        "酸・アルカリとイオン",
        "理論化学",
        "無機化学",
        "有機化学",
        "高分子化合物",
        "昆虫と植物",
        "季節と生物",
        "人の体の作りと運動",
        "植物の発芽、成長、結実",
        "動物の誕生",
        "植物の養分と水の通り道",
        "人の体のつくりと働き",
        "植物の体のつくりと働き",
        "植物の仲間",
        "生物と細胞",
        "動物の体のつくりと働き",
        "動物の仲間",
        "生物の変遷と進化",
        "生物の成長と殖え方",
        "遺伝の規則性と遺伝子",
        "植生の多様性と分布",
        "生物の体内環境",
        "生物の特徴",
        "遺伝子とその働き",
        "太陽と地面の様子",
        "天気の様子",
        "月と星",
        "流水の働き",
        "天気の変化",
        "土地のつくりと変化",
        "月と太陽",
        "火山と地震",
        "地層の重なりと過去の様子",
        "気象観測",
        "天気の変化",
        "日本の気象",
        "天体の動きと地球の自転・公転",
        "太陽系と恒星",
        "活動する地球",
        "移り変わる地球",
        "大気と海洋",
        "宇宙の構成",
        "惑星としての地球",
        "数と計算",
        "量と測定",
        "図形",
        "数量関係",
        "数と式",
        "図形",
        "関数",
        "資料の活用",
        "数学Ⅰ",
        "数学A",
        "数学Ⅱ",
        "数学B",
        "数学Ⅲ",
        "数学C"
    ];

    public static function getFakeTitle()
    {
        return self::ARENAMES[array_rand(self::ARENAMES)] . 'の実験';
    }
}