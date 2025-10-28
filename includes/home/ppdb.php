<?php
function renderPPDB()
{
?>
<section id="ppdb">
    <div class="row section-head">
        <div class="twelve columns">
            <h1>Penerimaan Peserta Didik Baru</h1>
            <hr />
        </div>
    </div>

    <div class="row section-head">
        <div class="twelve columns">
            <br />

            <picture>
                <source
                    srcset="images/open25.avif 640w,
                            images/open25.avif 320w"
                    sizes="(max-width: 600px) 100vw, 640px"
                    type="image/avif"
                />
                <img
                    src="images/open320.avif"
                    alt="openhouse-TA-2024-2025"
                    width="500"
                    height="500"
                    loading="lazy"
                    decoding="async"
                />
            </picture>

            <div class="center">
                <a href="promo-open-24.html">
                    <button>Pelajari Selengkapnya</button>
                </a>
            </div>

            <br />
        </div>
    </div>
</section>
<?php
}
?>
