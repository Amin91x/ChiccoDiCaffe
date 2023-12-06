<!-- Your other HTML and head section -->

<!DOCTYPE html>
@include('includes.header')
<head>
    <title> Chicco Di Caffe</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/main.css') }}" />
</head>

<body>
    <div class="flex flex-col h-screen">

        <div class="flex-grow">
            <div class="flex flex-col">

                <br>

                @if ($feedbacks && count($feedbacks))
                <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 feedback-box">
                    @foreach ($feedbacks as $feedback)
                    <div class="flex items-start rounded-xl bg-orange-100 p-4 shadow-lg">
                        <div class="ml-4">
                            <h1 class="font-black uppercase ">{{ $feedback->subject }}</h1>
                            <h1 class="font-black uppercase text-[#c81e76]">{{ $feedback->nickname }}</h1>
                            <h3 class="font-semibold ">{{ $feedback->email }}</h3>
                            <p class="mt-2 text-sm text-gray-500">{{ $feedback->comment }} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <!-- Handle the case when $feedbacks is empty or null -->
                <p>No feedback available.</p>
                @endif

                <br>
                <div class="text-center">
                    <a href="{{ route('feedback.create') }}">
                        <button class="bg-orange-200 hover:bg-orange-400 text-white font-bold py-2 px-4 rounded-md">
                            Submit your feedback
                        </button>
                    </a>
                </div>
                <br>
            </div>
        </div>

    </div>
</body>
</html>
@include('includes.footer')
<!-- Your other HTML and footer section -->