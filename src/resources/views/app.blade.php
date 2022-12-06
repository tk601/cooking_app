
<!DOCTYPE html>
<html lang="ja">
    <head>
        <?php ////get_header();?>
        <link rel="stylesheet" href="/css/test.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <body>
    <?php //get_template_part('parts/header_nav'); ?>
        <div class="background-option"> 
            <div id="breadcrumbs">
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php //if(function_exists('bcn_display')){
                        //bcn_display();
                    //}?>
                </div>
            </div>
            <section class="company__section company__section--color company__section--margin company__section--padding">
                <div class="company-section__headline company-section__headline--margin company-section__headline--color">
                    経営理念
                </div>
                <div class="company-section__title company-section__title--margin">
                    お客様目線で考え行動し、思いやりと一つ上の製品･サービスを提供し、お客様と地域社会に感謝される企業を目指す
                </div>
            </section>
            <section class="company__section company__section--color company__section--margin company__section--padding">
                <div class="company-section__headline company-section__headline--margin company-section__headline--color">
                    代表メッセージ
                </div>
                <div class="company-section__flex">
                    <div class="company-section-flex__left">
                        <div class="company-section-flex-left__img"></div>
                        <!-- <img class="company-section-flex-left__img" src="<?php //echo get_template_directory_uri(); ?>/image/advantage/advantage_cont03.png" alt=""> -->
                    </div>
                    <div class="company-section-flex__right">
                        <div class="company-section__title company-section__title--margin company-section__ceo--mdcenter">
                            代表メッセージが入ります
                        </div>
                        <div class="company-section__sentence company-section__sentence--margin">
                            説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります
                        </div>
                        <div class="company-section__ceo">
                            代表取締役　<span class="company-section__ceo--size">佐々木 直樹</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="company__section company__section--color company__section--margin company__section--padding">
                <div class="company-section__headline company-section__headline--margin company-section__headline--color">
                    会社概要
                </div>
                <div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">社名</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">株式会社ウォーテック</div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">所在地</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">東京都墨田区向島3-33-10</div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">電話番号</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">TEL:03-6808-3123 　FAX:03-6808-3124</div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">代表者</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">佐々木 直樹</div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">創業</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">1998年 8月10</div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">設立</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">2003年(H15) 12月12日</div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">資本金</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">500万円</div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">売上高</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">
                            <div>H30年度 117百万円</div>
                            <div>R1年度  159百万円</div>
                            <div>R2年度  103百万円</div>
                        </div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">社員数</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">〇〇人</div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">主な事業</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">
                            <div>消臭･除菌･抗菌･防かび剤、および同機能洗剤類の製造販売</div>
                            <div>抗菌遮熱塗装・防汚コーティング剤、節水装置(システム)の開発製造　など…</div>
                        </div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">実績</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">
                            <div>東武鉄道 全駅水回りの維持管理業務、(全204駅の24hコールセンター)</div>
                            <div>東京スカイツリー(東京ソラマチ)での近隣悪臭対策維持管理業務</div>
                            <div>海上自衛隊 (佐世保基地/横須賀基地)への特殊消臭洗濯洗剤納入</div>
                            <div>東急電鉄G、小田急電鉄G、京成電鉄Gへの特殊消臭除菌クリーナー納入</div>
                            <div>すかいらーくグループ全店舗へ除菌液納品　など…</div>
                        </div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">主要取引先</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">大手公共交通各社・大手百貨店各社・大規模ショッピングモール・各自治体・各種施設　他</div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">取引銀行</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">ずほ銀行・三菱東京UFJ銀行・朝日信用金庫</div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">取引商品</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">生分解性鮮度保持包装材、強力消臭防かび剤、強力消臭洗剤各シリーズ、防汚防かびコート剤、 厨房排水環境対策薬剤、厨房廃油回収装置、公共施設向け各種什器、還元化装置、大小トイレ 節水装置、その他</div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">施工・保守</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">防汚防かび施工、防臭防かび施工、節水施工等</div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title company-section__sub--center company-section__sub--boder"><div class="company-section-sub__title--table">社名</div></div>
                        <div class="company-section-sub__sentence company-section__sub--boder">株式会社ウォーテック</div>
                    </div>
                </div>
            </section>
            <section class="company__section company__section--color company__section--margin company__section--padding">
                <div class="company-section__headline company-section__headline--margin company-section__headline--color">
                    沿革
                </div>
                <div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title">(1998) H10年  8月</div>
                        <div class="company-section-sub__sentence">
                            <div>創業</div>
                            <div>女子トイレ節水装置のシステム開発･製造･効果検証を始める</div>
                        </div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title">(2003) H15年12月</div>
                        <div class="company-section-sub__sentence">
                            <div>有限会社ウォーテック設立</div>
                            <div>テルウェル東日本、バブコック日立、ゼリア新薬との提携のため法人設立 (女子トイレ節水装置)</div>
                        </div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title">(2007) H19年  6月</div>
                        <div class="company-section-sub__sentence">
                            <div>東武ホテル、東武百貨店での節水実績を基に、本体 東武鉄道との取引きが始まる</div>
                            <div>旅客駅における、臭気・抗菌・美観維持業務開始 (消臭除菌剤・消臭洗剤の開発製造 開始)</div>
                        </div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title">(2009) H21年10月</div>
                        <div class="company-section-sub__sentence">
                            <div>本店移転</div>
                            <div>東京都墨田区向島三丁目33番地3 に移転。東武鉄道 駅業務拡張により墨田区に移転</div>
                        </div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title">(2010) H22年  4月</div>
                        <div class="company-section-sub__sentence">
                            <div>株式会社ウォーテックに商号変更</div>
                        </div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title">(1998) H10年  8月</div>
                        <div class="company-section-sub__sentence">
                            <div>創業</div>
                            <div>女子トイレ節水装置のシステム開発･製造･効果検証を始める</div>
                        </div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title">(2017) H29年  8月</div>
                        <div class="company-section-sub__sentence">
                            <div>鮮度保持包装材 「アピノンキーパー」製造販売開始</div>
                        </div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title">(2018) H30年  9月</div>
                        <div class="company-section-sub__sentence">
                            <div>本店移転</div>
                            <div>東京都墨田区向島三丁目33番10号 に移転　[現所在地]</div>
                            <div>業務拡張による</div>
                        </div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title">(2018) H30年  8月</div>
                        <div class="company-section-sub__sentence">
                            <div>ハイブリッド樹脂 「生分解+鮮度保持」包装材の製造販売開始</div>
                        </div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title">(2018) H30年12月</div>
                        <div class="company-section-sub__sentence">
                            <div>モアディバイス株式会社 設立</div>
                            <div>生分解性鮮度保持包装材(アピノンキーパー)部門を、専業として移行</div>
                        </div>
                    </div>
                    <div class="company-section__sub company-section__sub--margin">
                        <div class="company-section-sub__title">(2022) R4年12月</div>
                        <div class="company-section-sub__sentence">
                            <div>秋田本社開設</div>
                            <div>秋田県大館市御成町3-5-14　NSビルに秋田本社を開設</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="company__section company__section--color company__section--margin company__section--padding">
                <div class="company-section__headline company-section__headline--margin company-section__headline--color">
                    経営方針 と 行動指針
                </div>
                <div class="company-section__title company-section__title--margin">
                    ★ “誰のため”、“何のため” に仕事をしているのかを常に考える ★
                </div>
                <div class="company-section__sentence company-section__sentence--margin">
                    <div>◎ 自己都合、会社都合も大切だが、もっと大切な事より優先させていないか</div>
                    <div>◎ 昨日より今日、今日より明日 ･･･ 現状不満足意識で働けているか</div>
                    <div>◎ 物事の奥の奥まで深く考え判断・行動を ･･･ 責任ある仕事であるか</div>
                    <div>◎ 会社、仲間にプラスになる動きを心掛けているか</div>
                    <div>◎ なぜ、なぜ ･･･ ５回。　完了後の確認 ･･･ ２回。</div>
                </div>
            </section>
            <section class="company__section company__section--color company__section--margin company__section--padding">
                <div class="company-section__headline company-section__headline--margin company-section__headline--color">
                    Watecのこだわり
                </div>
                <div class="company-section__title company-section__title--margin">
                    『100円頂ける仕事は、110円の仕事(心)で返す!!』を常に心掛けております
                </div>
            </section>

            
            <?php ////get_footer();?>
            <?php ////wp_footer();?>
        </div>
    </body>
</html>