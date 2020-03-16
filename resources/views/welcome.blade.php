<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Manga Club's</title>

    <!-- Fonts -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
   
</head>

<body>
    <nav class="navbar navbar-inverse">
    <div class="flex-center position-ref navbar-header">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
    </nav>
        @endif

        {{-- <div class="content">
            <div class="title m-b-md">Manga Club's</div>


        </div> --}}
    </div>
        <div class="container fullfix">
            <div class="contents">
                
                    <div class="onepiece">
                        <p class="contens titles">One Piece</p>

                        <img src=" /uploads/1o01.jpg" width="450" height="550" /><br>
                        &nbsp;<p>วันพีซ เป็นเรื่องราวในยุคทองของโจรสลัด ทุกคนต่างเป้าหมายเดียวกันคือเพื่อค้นหา สมบัติที่เรียกว่า
                            “วันพีซ” ซึ่งผู้ใดสามารถค้นหาและครอบ<br>
                            ครองวันพีซอยู่ ผู้นั้นก็คือเจ้าแห่งโจรสลัด(ราชาโจรสลัด)
                            โดยผู้ที่เคยครอบครองวันพีซนั้นมีอยู่คนเดียวตามที่เปิดเผยคือ เจ้าแห่งโจรสลัด โกลด์<br>
                            ดี โรเจอร์ ซึ่งหลังจากที่ ได้ครอบครองวันพีซแล้ว โกลด์ ดี โรเจอร์ก็ได้มอบตัว
                            และยอมรับโทษการประหารชีวิตที่เกาะโร๊คบ้านเกิดของตนนั่นเอง<br>
                            และก่อนตายโกลด์ ดี โรเจอร์ ได้ทิ้งคำพูดก่อนตายที่เปลี่ยนยุคสมัยของโจรสลัดว่า “สมบัติของฉันหรอ
                            อยากได้ก็เอาไปซิ ไปหาเอาเลย ฉันเอา<br>
                            ทุกอย่างบนโลกไปไว้ที่นั่นหมดแล้ว” แล้วเหล่า โจรสลัดทั้งหลายจึงมุ่งหน้าสู้แกรนด์ไลน์เพื่อตามหาวันพีซ
                        </p>

                    </div>
                <a href="/onepiece/onepiecezz" type="submit" name="submit" class="bton"> Read </a>
                    <div class="soma">
                        <p class="contens titles">Shokugeki no Soma</p>

                        <img src=" /uploads/2s01.jpg" width="450" height="550" /><br>
                        &nbsp;<p>เนื้อหากล่าวถึงโรงเรียนสอนการทำอาหารโทสึคิ ที่ไม่ใช้เป็นแค่สถาบันสอนการเป็นพ่อครัวธรรมดา
                            แต่ที่แห่งนี้คือ “สังเวียนการต่อสู้” เพื่อก้าวไป<br>
                            สู่การชิงความเป็นหนึ่ง ที่ต้องใช้ความรู้อันหลากหลาย และยังต้องมีกลยุทธ์ทักษะ
                            เทคนิคเฉพาะตัวเข้าพิชิตกัน
                            แน่นอนว่ามันไม่ง่ายเลยที่จะ<br>
                            ฟันฝ่าไปได้อย่างสบายๆ เพราะทักษะฝีมือของคู่ต่อสู้ในโรงเรียนแต่ละคนใช่ว่าจะอ่อนหัดกันซะที่ไหน<br>
                            “เอาล่ะ! สมรภูมิแห่งการกิน สังเวียนกระทะร้อนสุดเดือดและมันส์เริ่มแล้ว!”</p>

                    </div>
                    <a href="/soma/somazz" type="submit" name="submit" class="bton"> Read </a>
                    <div class="dragonball">
                        <p class="contens titles">Dragonball</p>
                        <img src=" /uploads/3d01.jpg" width="450" height="550" /><br>
                        &nbsp;<p>ซุนโกคู ในวัยเด็ก ก็ได้รู้เกี่ยวกับ ดราก้อนบอล จาก บลูม่า ซึ่งกำลังตามหาอยู่ แถมโกคูเองก็มี
                            ดราก้อนบอล4ดาว ซึ่งเป็นของต่างหน้าคุณปู่ ซุน<br>
                            โกฮัง อีกด้วย ก็เลยตัดสินใจไปตามหาดราก้อนบอลด้วยกัน ต่อมาก็ได้ อูลอน มาเป็นพวกช่วยหาด้วย
                            แต่ในระหว่างนั้น ก็มี ยามุชา และ ปูอัล<br>
                            กับ ปิลาฟและพรรคพวก คอยตามหาดราก้อนบอลด้วย หลังจากที่ฝ่ายโกคูรวบรวมดราก้อนบอลจนเกือบครบ
                            ก็ถูกเล่ห์กลของปิลาฟหลอกให้ติด<br>
                            กับอยู่ที่ปราสาทพร้อมกับพวกของยามุชา
                            ปิลาฟก็เลยได้ดราก้อนบอลเพิ่ม(รวมดราก้อนบอล1ดาวของตัวเอง)มาครบ7ลูก
                            และจะเรียกเทพเจ้า<br>
                            มังกรเพื่อขอให้ตนเองเป็นเจ้าโลก แต่กลับถูกอูลอนขัดขวางด้วยการขอกางเกงในตัดหน้า ปิลาฟ โกรธจัด
                            จึงพาพรรคพวกของโกคูอยู่ในคุกที่<br>
                            ยากที่จะออกมาได้ แต่ โกคู ก็กลายร่างเป็นลิงยักษ์ เมื่อมองเห็นพระจันทร์เต็มดวง
                            ก็เลยทำลายปราสาทของปิลาฟจนพินาศ แต่ยามุชาก็ออก<br>
                            อุบายให้ปูอัลแปลงเป็นกรรไกร ตัดหางของลิงยักษ์ออกจากกัน โกคูก็เลยกลับร่างเดิม จากนั้น
                            โกคูก็มุ่งหน้าต่อไปยัง บ้านเต่า เพื่อฝึกวิชากับ<br>
                            ผู้เฒ่าเต่า และ ได้ คุริลิน เป็นเพื่อน รวมถึง รันจี้ สาว2บุคลิกมาอยู่ที่บ้านเต่าด้วย</p>

                    </div>
                    <a href="/dragonball/dragonballzz" type="submit" name="submit" class="bton"> Read </a>



            </div>
        </div>
</body>

</html>