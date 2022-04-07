var rec = null;
// *************************************
// jQuery
// *************************************
$(function(){

    $('#target1').balloon({
        // 吹き出しを右
        position: "right",
        // 吹き出し端に付く正三角形のサイズ（高さ）
        tipSize: 20,
        // 吹き出しの CSS
        css: {
            "color": "#0000ff",
            "font-size": "20px",
            "font-weight": "bold",
            "border": "solid 2px #111",
            "padding": "20px",
            "background-color": "#eee",
            "opacity": 1,
        }
    });

    $('#target2').balloon({
        // 吹き出しを上
        position: "top",
        // 吹き出し端に付く正三角形のサイズ（高さ）
        tipSize: 60,
        // 吹き出しの CSS 設定です
        css: {
            "height": "270px",
            "opacity": "1",
            "color": "#000",
            "font-size": "16px",
            "border-radius": "10px",
            "border": "solid 2px #A63814",
            "padding": "10px",
            "background-color": "#eee",
            "opacity": 1,
        },
        // CSS の対象となる、吹き出しの内部コンテンツ
        "html": true,
        "contents": '<img src="https://winofsql.jp/image/daz/696235-line.jpg" style="width:200px">'
            + '<br>白黒線画化<br>'
            + '<a href="." class="btn btn-secondary">フォルダ</a>'
    });

});
