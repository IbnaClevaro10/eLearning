@extends('frontend.templates.layout')

@section('content')
<style>
    body {
        background: rgb(235, 233, 233);
        color: #000;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .container {
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
    h1, h3 {
        color: #000000;
    }
    .btn-primary {
        background-color: #34395e;
        border-color: #34395e;
    }
    .question {
        background-color: rgba(255, 255, 255, 0.2);
        border: 1px solid #fff;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }
    .question:nth-child(odd) {
        background-color: rgba(255, 255, 255, 0.3);
    }
</style>
</head>
<body>
<div class="container my-5">
    <h1 class="text-center mb-4">Soal Ujian</h1>

    <!-- Pilihan Ganda -->
    <div class="mb-5">
        <h3>Soal Pilihan Ganda</h3>
        <form>
            <div class="question bg-secondary">
                <label class="form-label">1. Apa ibu kota Indonesia?</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal1" id="soal1a">
                        <label class="form-check-label" for="soal1a">A. Jakarta</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal1" id="soal1b">
                        <label class="form-check-label" for="soal1b">B. Bandung</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal1" id="soal1c">
                        <label class="form-check-label" for="soal1c">C. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal1" id="soal1c">
                        <label class="form-check-label" for="soal1c">D. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal1" id="soal1c">
                        <label class="form-check-label" for="soal1c">E. Surabaya</label>
                    </div>
                </div>
            </div>

            <div class="question bg-light">
                <label class="form-label">2. Siapa penemu bola lampu?</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal2" id="soal2a">
                        <label class="form-check-label" for="soal2a">A. Thomas Edison</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal2" id="soal2b">
                        <label class="form-check-label" for="soal2b">B. Nikola Tesla</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal2" id="soal2c">
                        <label class="form-check-label" for="soal2c">C. Albert Einstein</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal2" id="soal2c">
                        <label class="form-check-label" for="soal2c">D. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal2" id="soal2c">
                        <label class="form-check-label" for="soal2c">E. Surabaya</label>
                    </div>
                </div>
            </div>
            <div class="question bg-secondary">
                <label class="form-label">3. Apa ibu kota Indonesia?</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal1" id="soal1a">
                        <label class="form-check-label" for="soal3a">A. Jakarta</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal3" id="soal3b">
                        <label class="form-check-label" for="soal3b">B. Bandung</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal3" id="soal3c">
                        <label class="form-check-label" for="soal3c">C. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal3" id="soal3c">
                        <label class="form-check-label" for="soal3c">D. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal3" id="soal3c">
                        <label class="form-check-label" for="soal3c">E. Surabaya</label>
                    </div>
                </div>
            </div>

            <div class="question bg-light">
                <label class="form-label">4. Siapa penemu bola lampu?</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal4" id="soal4a">
                        <label class="form-check-label" for="soal4a">A. Thomas Edison</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal4" id="soal4b">
                        <label class="form-check-label" for="soal4b">B. Nikola Tesla</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal4" id="soal4c">
                        <label class="form-check-label" for="soal4c">C. Albert Einstein</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal4" id="soal4c">
                        <label class="form-check-label" for="soal4c">D. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal4" id="soal4c">
                        <label class="form-check-label" for="soal4c">E. Surabaya</label>
                    </div>
                </div>
            </div>
            <div class="question bg-secondary">
                <label class="form-label">5. Apa ibu kota Indonesia?</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal5" id="soal5a">
                        <label class="form-check-label" for="soal5a">A. Jakarta</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal5" id="soal5b">
                        <label class="form-check-label" for="soal5b">B. Bandung</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal5" id="soal5c">
                        <label class="form-check-label" for="soal5c">C. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal5" id="soal5c">
                        <label class="form-check-label" for="soal5c">D. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal5" id="soal5c">
                        <label class="form-check-label" for="soal5c">E. Surabaya</label>
                    </div>
                </div>
            </div>

            <div class="question bg-light">
                <label class="form-label">6. Siapa penemu bola lampu?</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal6" id="soal6a">
                        <label class="form-check-label" for="soal6a">A. Thomas Edison</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal6" id="soal6b">
                        <label class="form-check-label" for="soal6b">B. Nikola Tesla</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal6" id="soal6c">
                        <label class="form-check-label" for="soal6c">C. Albert Einstein</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal6" id="soal6c">
                        <label class="form-check-label" for="soal6c">D. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal6" id="soal6c">
                        <label class="form-check-label" for="soal6c">E. Surabaya</label>
                    </div>
                </div>
            </div>
            <div class="question bg-secondary">
                <label class="form-label">7. Apa ibu kota Indonesia?</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal7" id="soal7a">
                        <label class="form-check-label" for="soal7a">A. Jakarta</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal7" id="soal7b">
                        <label class="form-check-label" for="soal7b">B. Bandung</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal7" id="soal7c">
                        <label class="form-check-label" for="soal7c">C. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal7" id="soal7c">
                        <label class="form-check-label" for="soal7c">D. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal7" id="soal7c">
                        <label class="form-check-label" for="soal7c">E. Surabaya</label>
                    </div>
                </div>
            </div>

            <div class="question bg-light">
                <label class="form-label">8. Siapa penemu bola lampu?</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal8" id="soal8a">
                        <label class="form-check-label" for="soal8a">A. Thomas Edison</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal8" id="soal8b">
                        <label class="form-check-label" for="soal8b">B. Nikola Tesla</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal8" id="soal8c">
                        <label class="form-check-label" for="soal8c">C. Albert Einstein</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal8" id="soal8c">
                        <label class="form-check-label" for="soal8c">D. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal8" id="soal8c">
                        <label class="form-check-label" for="soal8c">E. Surabaya</label>
                    </div>
                </div>
            </div>
            <div class="question bg-secondary">
                <label class="form-label">9. Apa ibu kota Indonesia?</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal9" id="soal9a">
                        <label class="form-check-label" for="soal9a">A. Jakarta</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal9" id="soal9b">
                        <label class="form-check-label" for="soal9b">B. Bandung</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal9" id="soal9c">
                        <label class="form-check-label" for="soal9c">C. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal9" id="soal9c">
                        <label class="form-check-label" for="soal9c">D. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal9" id="soal9c">
                        <label class="form-check-label" for="soal9c">E. Surabaya</label>
                    </div>
                </div>
            </div>

            <div class="question bg-light">
                <label class="form-label">10. Siapa penemu bola lampu?</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal10" id="soal10a">
                        <label class="form-check-label" for="soal10a">A. Thomas Edison</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal10" id="soal10b">
                        <label class="form-check-label" for="soal10b">B. Nikola Tesla</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal10" id="soal10c">
                        <label class="form-check-label" for="soal10c">C. Albert Einstein</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal10" id="soal10c">
                        <label class="form-check-label" for="soal10c">D. Surabaya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soal10" id="soal10c">
                        <label class="form-check-label" for="soal10c">E. Surabaya</label>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Essay -->
    <div class="mb-5">
        <h3>Soal Essay</h3>
        <form>
            <div class="question">
                <label for="essay1" class="form-label">11. Jelaskan manfaat dari teknologi dalam kehidupan sehari-hari!</label>
                <textarea class="form-control" id="essay1" rows="3"></textarea>
            </div>
            <div class="question">
                <label for="essay2" class="form-label">12. Apa pendapatmu tentang pendidikan online?</label>
                <textarea class="form-control" id="essay2" rows="3"></textarea>
            </div>
            <div class="question">
                <label for="essay1" class="form-label">11. Jelaskan manfaat dari teknologi dalam kehidupan sehari-hari!</label>
                <textarea class="form-control" id="essay1" rows="3"></textarea>
            </div>
            <div class="question">
                <label for="essay2" class="form-label">12. Apa pendapatmu tentang pendidikan online?</label>
                <textarea class="form-control" id="essay2" rows="3"></textarea>
            </div>
            <div class="question">
                <label for="essay2" class="form-label">12. Apa pendapatmu tentang pendidikan online?</label>
                <textarea class="form-control" id="essay2" rows="3"></textarea>
            </div>
        </form>
    </div>

    <div class="text-right">
        <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
    </div>
</div>

@stop
