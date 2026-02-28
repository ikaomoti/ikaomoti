$(function () {
    //スクロールすると上部に固定させるための設定を関数でまとめる
    function FixedAnime() {
        var headerH = $('#header').outerHeight(true);
        var scroll = $(window).scrollTop();
        if (scroll >= headerH) {//headerの高さ以上になったら
            $('.l-header').addClass('js-header-show');//showというクラス名を付与
        } else {//それ以外は
            $('.l-header').removeClass('js-header-show');//showというクラス名を除去
        }
    }
    // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function () {
        FixedAnime();/* スクロール途中からヘッダーを出現させる関数を呼ぶ*/
    });
    // ページが読み込まれたらすぐに動かしたい場合の記述
    $(window).on('load', function () {
        FixedAnime();/* スクロール途中からヘッダーを出現させる関数を呼ぶ*/
    });

    // ハンバーガーメニュー
    $('.hamburger-button').on('click', function () {
        $('.gnav').toggleClass('open');
        $(this).toggleClass('open');
    });

    $(window).on('resize', function () {
        $('.gnav').removeClass('open');
        $('.hamburger-button').removeClass('open');
    });

    const swiper = new Swiper(".swiper", {
        loop: true, //繰り返しをする
        effect: 'fade',
        autoplay: {
            delay: 0,
        },
        centeredSlides: true, //アクティブなスライドを中央に表示
        slidesPerView: 1, //スライダー数
        speed: 20000
    });

    //下から上にフェードイン
    $('.fadeinup.animate__animated').waypoint({
        handler: function (direction) {
            if (direction === 'down') {
                $(this.element)
                    .addClass('animate__fadeInUp');
            }
        },
        offset: '85%',
    });

    //その場でフェードイン
    $('.fadein.animate__animated').waypoint({
        handler: function (direction) {
            if (direction === 'down') {
                $(this.element)
                    .addClass('animate__fadeIn');
            }
        },
        offset: '60%',
    });
});

document.addEventListener("DOMContentLoaded", () => {

    const bars = document.querySelectorAll(".skill__level-bar");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bar = entry.target;
                const level = bar.dataset.level;
                const percent = (level / 10) * 100;
                bar.style.width = percent + "%";
                observer.unobserve(bar);
            }
        });
    }, { threshold: 0.3 });

    bars.forEach(bar => observer.observe(bar));




    const items = [
        document.querySelector(".profile__catch"),
        document.querySelector(".fly-wrapper--picture"),
        document.querySelector(".fly-wrapper--text")
    ];

    const initialDelay = 0;

    items.forEach((item, index) => {
        item.classList.add("balloon-pop");

        setTimeout(() => {
            item.classList.add("show");

            // バルーン表示から 0.5 秒後に文字アニメ開始
            setTimeout(() => {
                const texts = item.querySelectorAll(".lupin-target");
                texts.forEach(el => animateTextLupin(el));
            }, 1000);

        }, initialDelay + 700 * index);
    });
});

function animateTextLupin(element) {
    let index = 0;

    function wrap(node) {
        let child = node.firstChild;

        while (child) {
            const next = child.nextSibling; // 

            if (child.nodeType === Node.TEXT_NODE) {
                const text = child.textContent;
                const fragment = document.createDocumentFragment();

                text.split("").forEach(char => {
                    const span = document.createElement("span");
                    span.textContent = char;
                    span.classList.add("lupin-char");
                    span.style.animationDelay = `${index * 0.07}s`;
                    index++;
                    fragment.appendChild(span);
                });

                child.replaceWith(fragment);

            } else if (child.nodeType === Node.ELEMENT_NODE) {
                wrap(child);
            }

            child = next; // 
        }
    }

    wrap(element);
    element.style.visibility = "visible";
}