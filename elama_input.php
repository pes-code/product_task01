<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <title>elama</title>
</head>

<body>
    <form>
        <fieldset class="">
            <fieldset class="lw_contents">
                <div class="lw_title">
                    <h2>Living Will</h2>
                    <h3>-終末期医療における事前指示書-</h3>
                </div>

                <div class="lw_text">
                    <p>この指示書は、私の精神が健全な状態であるときに私自身の意思で記したものです。<br>
                        したがって、私の精神が健全な状態にあるときに私自身が破棄するか、<br>
                        または撤回する旨の文章を作成しない限り有効です。</p>
                </div>

                <div class="lw_checkbox">
                    <div class="lw_check">
                        <input type="checkbox" id="" name="">
                        <p>私の傷病が、現在の医学では不治の状態であり、既に死が迫っていると診断された場合には、<br>
                            ただ単に死期を引き延ばすためだけの延命措置はお断りいたします。</p>
                    </div>
                    <div class="lw_check">
                        <input type="checkbox" id="" name="">
                        <p>ただしこの場合、私の苦痛を和らげるためには、麻薬などの適切な使用により十分な緩和医療を行なって下さい。</p>
                    </div>
                    <div class="lw_check">
                        <input type="checkbox" id="" name="">
                        <p>私が回復不能な遷延性意識障害（持続的植物状態）に陥ったときは生命維持措置を取りやめてください。</p>
                    </div>
                </div>

            </fieldset>

            <fieldset class="hope_contents">
                <div class="hope_title">
                    <h2>希望表明書</h2>
                </div>
                <div class="hope_text">
                    <p>私は、「Living Will-終末期医療における事前指示書-」で既に自分の意思を表明しています。<br>
                        それに加えて、人生の最終段階を迎えたときに備え、私の思いや具体的な医療に対する要望を<br>
                        以下に記しました。自分らしい最期を生きるための「私の希望」です。</p>
                </div>

                <div class="place_hope">
                    <h4>1．最期を過ごしたい場所</h4>
                    <input type="checkbox" id="" name="">自宅
                    <input type="checkbox" id="" name="">病院
                    <input type="checkbox" id="" name="">介護施設
                    <input type="checkbox" id="" name="">その他<input type="textaria" id="" name="">
                </div>

                <div class="important_hope">
                    <h4>2．私が大切にしたいこと</h4>
                    <input type="checkbox" id="" name="">できる限り自立した生活をすること
                    <input type="checkbox" id="" name="">弱った姿を他人に見せないこと
                    <input type="checkbox" id="" name="">静かな環境で過ごすこと
                    <input type="checkbox" id="" name="">大切な人との時間を十分にもつこと
                    <input type="checkbox" id="" name="">食事や排泄が自力でできること
                    <input type="checkbox" id="" name="">回復の可能性があるならばあらゆる措置を受けること
                    <input type="checkbox" id="" name="">その他<input type="textaria" id="" name="">

                </div>

                <div class="nutrition_hope">
                    <h4>3．自分で食べることができなくなったり、医師により回復不能と判断されたときの栄養手段で希望すること</h4>
                    <input type="checkbox" id="" name="">経鼻チューブ栄養
                    <input type="checkbox" id="" name="">中心静脈栄養
                    <input type="checkbox" id="" name="">胃ろう
                    <input type="checkbox" id="" name="">点滴による水分補給
                    <input type="checkbox" id="" name="">口から入るものを食べる文だけ食べさせて欲しい
                </div>

                <div class="medical_hope">
                    <h4>4．医師が回復不能と判断したときに、私がして欲しいこと</h4>
                    <input type="checkbox" id="" name="">心肺蘇生
                    <input type="checkbox" id="" name="">人工呼吸器
                    <input type="checkbox" id="" name="">気管切開
                    <input type="checkbox" id="" name="">人工透析
                    <input type="checkbox" id="" name="">酸素吸入
                    <input type="checkbox" id="" name="">輸血
                    <input type="checkbox" id="" name="">昇圧剤や強心薬
                    <input type="checkbox" id="" name="">抗生物質
                    <input type="checkbox" id="" name="">抗がん剤
                    <input type="checkbox" id="" name="">点滴
                    <!--以下のように細分化
                    ・胸骨圧迫
                    ・気管挿管
                    ・薬剤投与
                    ・除細動
                    ・家族や大切な人が到着するまでCPR
                -->
                </div>

                <div class="other_hope">
                    <h4>5．その他の希望</h4>
                    <input type="textaria" id="" name="">
                </div>

            </fieldset>
            <div class="">
                <div class="">
                    <p>以上、私の要望を忠実に果たしてくださった方々に深く感謝申し上げるとともに、<br>
                        その方々が私の要望に従って下さった行為一切の責任は私自身にあることを付記いたします。</p>
                </div>
                <div class="sign">
                    <!--【案】以下は電子直筆システム的なものを利用する-->
                    <label>記入日</label><input type="text" id="" name="">
                    <label>本人署名</label><input type="text" id="" name="">
                    <label>代筆者署名</label><input type="text" id="" name=""> <label>続柄</label><input type="text" id="" name="">
                    <label>見届人署名</label><input type="text" id="" name=""> <label>続柄</label><input type="text" id="" name="">
                </div>
                <div class="">
                    <input type="submit" id="" name="" value="登録">
                </div>
            </div>
        </fieldset>
    </form>
</body>

</html>