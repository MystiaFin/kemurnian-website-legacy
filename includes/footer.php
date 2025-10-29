<?php
function renderFooter()
{
?>
<footer>
    <div class="row">
        <br>

        <div class="mob-whole six columns left">
            <picture>
                <source
                    srcset="/images/cambridge.avif 2089w, /images/cambridge-small.avif 1045w"
                    sizes="(max-width: 540px) 100vw, 540px"
                    type="image/avif" />
                <img src="/images/cambridge.webp" alt="cambridge" width="2089" height="728" loading="lazy" decoding="async" />
            </picture>
        </div>

        <div class="mob-whole six columns right">
            <h3 class="contact">Follow Us</h3>
            <ul class="footer-links-soi">
                <li><a title="Facebook" href="https://web.facebook.com/sekolah.kemurnian?_rdc=1&_rdr" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a title="Instagram" href="https://www.instagram.com/sekolah.kemurnian/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a title="YouTube" href="https://www.youtube.com/results?search_query=sekolah+kemurnian" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>

        <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero"><span>Top</span><i class="fa fa-long-arrow-up"></i></a>
        </div>

        <div id="contact">
            <a title="Linktree" href="https://linktr.ee/sekolahkemurnian" target="_blank">
                <picture>
                    <source srcset="/images/whatsapp.avif" type="image/avif" />
                    <img src="/images/whatsapp.webp" alt="whatsapp" width="1000" height="1000" loading="lazy" decoding="async" />
                </picture>
            </a>
        </div>

        <div id="sound">
            <audio id="mars" controls>
                <source src="/mars-kemurnian-jaya.mp3" type="audio/mp3">
            </audio>
        </div>
    </div>

    <div class="row">
        <div class="twelve columns">
            <p>Copyright © <?php echo date('Y'); ?> Sekolah Kemurnian. All rights reserved. | Design & development by Digital One</p>
        </div>
    </div>
</footer>
<?php
}
?>
