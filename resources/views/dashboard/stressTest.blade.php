@extends('layout.dashboard')

@section('title', 'Home')

@php
    $currentQuestion = 0;
@endphp


@section('content')
    <h1 class="text-3xl font-bold">Tes Tingkat Keparahan Stress: Mengenal Diri Lebih Dalam</h1>
    <div class="flex gap-x-2 w-full mt-10">
        @foreach($questions as $key => $question)
            <div class="w-[20px] rounded-md h-2 progress-bar {{ $key <= $currentQuestion ? 'bg-green-600' : 'bg-gray-500' }}"></div>
        @endforeach
    </div>
    <div class="mt-2 current-question">Pertanyaan {{ $currentQuestion+1 }}/{{ count($questions) }}</div>
    <div class="mt-10 text-xl font-bold question-text">{{ $questions[$currentQuestion]->question }}</div>
    <div class="flex gap-x-3 mt-5">
        <div class="px-3 py-2 rounded-md bg-gray-500 text-white cursor-pointer select-none" onclick="changeQuestion(1, 1)">Tidak Pernah</div>
        <div class="px-3 py-2 rounded-md bg-gray-500 text-white cursor-pointer select-none" onclick="changeQuestion(1, 2)">Pernah</div>
        <div class="px-3 py-2 rounded-md bg-gray-500 text-white cursor-pointer select-none" onclick="changeQuestion(1, 3)">Kadang-Kadang</div>
        <div class="px-3 py-2 rounded-md bg-gray-500 text-white cursor-pointer select-none" onclick="changeQuestion(1, 4)">Sering</div>
        <div class="px-3 py-2 rounded-md bg-gray-500 text-white cursor-pointer select-none" onclick="changeQuestion(1, 5)">Selalu</div>
    </div>

    <div class="flex justify-end gap-x-3">
        <div class="px-5 py-2 rounded-md shadow-lg bg-blue-500 text-white cursor-pointer select-none" onclick="changeQuestion(-1)">Prev</div>
        <div class="px-5 py-2 rounded-md shadow-lg bg-green-500 text-white cursor-pointer select-none" id="buttonFinish" onclick="changeQuestion(1)">Next</div>
    </div>

    <script>
        let currentQuestion = @json($currentQuestion);
        const totalQuestions = @json(count($questions));
        let answers = Array.from({ length: totalQuestions }, () => ({ 
            value: 0, 
            question: null 
        }));

        function changeQuestion(direction, answerValue = null) {
            if (answerValue !== null) {
                answers[currentQuestion] = { 
                    value: answerValue,
                    question: currentQuestion 
                };
            }

            currentQuestion += direction;
            if (currentQuestion < 0) currentQuestion = 0;
            else if (currentQuestion >= totalQuestions) currentQuestion = totalQuestions - 1;

            if(currentQuestion+1 >= totalQuestions) {
                document.querySelector('#buttonFinish').innerText = `Finish`;
            } else {
                document.querySelector('#buttonFinish').innerText = `Next`;
            }

            document.querySelector('.current-question').innerText = `Pertanyaan ${currentQuestion + 1}/${totalQuestions}`;
            document.querySelector('.question-text').innerText = @json($questions)[currentQuestion].question;

            document.querySelectorAll('.progress-bar').forEach((bar, index) => {
                bar.className = index <= currentQuestion ? 'progress-bar w-[20px] rounded-md h-2 bg-green-600' : 'progress-bar w-[20px] rounded-md h-2 bg-gray-500';
            });
        }
    </script>

@endsection
 