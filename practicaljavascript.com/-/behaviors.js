/*  PracticalJavaScript.com
    Andrew Hedges, andrew@hedges.name
    2010-10-01
*/

(function (d) {
    var imgs, i, len
    function hi(lo) {
        var img    = new Image()
        img.onload = function () {
            lo.src = this.src
        }
        img.src = lo.src.replace('-lowsrc', '')
    }
    imgs = d.getElementsByTagName('img')
    for (i = 0, len = imgs.length; i < len; ++i) {
        if (imgs[i].src.indexOf('-lowsrc')) {
            hi(imgs[i])
        }
    }
})(this.document);