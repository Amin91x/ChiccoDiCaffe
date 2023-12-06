<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<head>
    <title> Chicco Di Caffe</title>
</head>

<body>

    <div class="flex-grow">
        @include('includes.errors')

        <form role="form" method="POST" action="{{ route('feedback.store') }}" data-parsley-validate>
            {{ csrf_field() }}



            <div class="flex justify-center">
                <div class="row">
                    <div class="items-center justify-center bg-white w-[50rem]">
                        <div class="mx-3 text-center">
                            <fieldset class="bg-white rounded-lg">
                                <legend class="pt-10 mb-3 block text-2xl font-medium text-[#c81e76]">
                                    Information:
                                </legend>
                                <div class="mb-5">

                                    <div class="px-3">
                                        <div class="mb-5">
                                            <label for="nickname" class="mb-3 block text-base font-medium text-[#c81e76] text-start">
                                                Nickname:
                                            </label>
                                            <input type="text" name="nickname" id="nickname" class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{ old('nickName') }}" required />
                                        </div>
                                    </div>

                                    <div class="px-3">
                                        <div class="mb-5">
                                            <label for="email" class="mb-3 block text-base font-medium text-[#c81e76] text-start">
                                                Email:
                                            </label>
                                            <input type="text" name="email" id="email" class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{ old('email') }}" required />
                                        </div>
                                    </div>

                                    <div class="px-3">
                                        <div class="mb-5">
                                            <label for="fName" class="mb-3 block text-base font-medium text-[#c81e76] text-start">
                                                First Name:
                                            </label>
                                            <input type="text" name="fName" id="fName" class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{ old('fName') }}" required />
                                        </div>
                                    </div>

                                    <div class="px-3">
                                        <div class="mb-5">
                                            <label for="lName" class="mb-3 block text-base font-medium text-[#c81e76] text-start">
                                                Last Name:
                                            </label>
                                            <input type="text" name="lName" id="lName" class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{ old('lName') }}" required />
                                        </div>
                                    </div>

                                    <div class="px-3">
                                        <div class="mb-5">
                                            <label for="phone" class="mb-3 block text-base font-medium text-[#c81e76] text-start">
                                                Phone Number:
                                            </label>
                                            <input type="number" name="phone" id="phone" class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{ old('phone') }}" required />
                                        </div>
                                    </div>

                                    <div class="px-3">
                                        <div class="mb-5">
                                            <label for="gender" class="mb-3 block text-base font-medium text-[#c81e76] text-start">
                                                Gender:
                                            </label>
                                            <div class="form-check mb-3 block text-base font-medium text-[#6A64F1] text-start">
                                                <input class="form-check-input" type="radio" name="gender" id="male" value="1">
                                                <label class="form-check-label" for="male">
                                                    Male
                                                </label>
                                            </div>

                                            <div class="form-check mb-3 block text-base font-medium text-[#6A64F1] text-start">
                                                <input class="form-check-input" type="radio" name="gender" id="female" value="0">
                                                <label class="form-check-label" for="female">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="px-3">
                                        <div class="mb-5">
                                            <label for="city" class="mb-3 block text-base font-medium text-[#c81e76] text-start">
                                                City:
                                            </label>
                                            <input type="text" name="city" id="city" class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{ old('city') }}" required />
                                        </div>
                                    </div>
                                    <div class="px-3">
                                        <div class="mb-5">
                                            <label for="state" class="mb-3 block text-base font-medium text-[#c81e76] text-start">
                                                State:
                                            </label>
                                            <select name="state" id="state" class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                                <option value="Riyadh">Riyadh</option>
                                                <option value="Makkah">Makkah</option>
                                                <option value="Madinah">Madinah</option>
                                                <option value="l Jawf">Al Jawf</option>
                                                <option value="Al-Bahah">Al-Bahah</option>
                                                <option value="Al-Qassim">Al-Qassim</option>
                                                <option value="Asir">Asir</option>
                                                <option value="Ha'il Region">Ha'il Region</option>
                                                <option value="Jizan">Jizan</option>
                                                <option value="Najran">Najran</option>
                                                <option value="Northern Borders Region">Northern Borders Region</option>
                                                <option value="Tabuk">Tabuk</option>
                                            </select>
                                        </div>

                                    </div>

                            </fieldset>
                            <fieldset class="bg-white rounded-lg">

                                <label for="subject" class="mb-3 block text-base font-medium text-[#c81e76] text-start">
                                    Title:
                                </label>
                                <input type="text" name="subject" id="subject" class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="{{ old('subject') }}" required />



                                <div class="w-full px-3 py-3">
                                    <label for="comment" class="mb-3 block text-base font-medium text-[#c81e76] text-start">Write your feedback</label>
                                    <textarea name="comment" id="comment" rows="4" class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-pink-700 focus:shadow-md" required>{{ old('comment') }}</textarea>
                                </div>

                                <div class="px-3">
                                    <div class="mb-5">
                                        <label for="satisfaction" class="mb-3 block text-base font-medium text-[#c81e76]">
                                            Rate my website<span class="text-red-500">*</span>
                                        </label>
                                        <div class='flex items-center justify-center'>
                                            <div class='w-full max-w-lg px-20 py-8 mx-auto bg-white rounded-lg '>
                                                <div>

                                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
                                                    <!-- Include Font Awesome CSS -->


                                                    <!-- Add the radio inputs and labels with stars -->
                                                    <div>
                                                        <input name="satisfaction" type="radio" id="1" value="1" class="hidden peer" />
                                                        <label for="1" class="outline-block cursor-pointer w-10 h-10 p-0 text-pink-500 peer-hover:text-gray-300 peer-checked:text-pink-300">
                                                            <i class="fas fa-star"></i>
                                                        </label>
                                                        <input name="satisfaction" type="radio" id="2" value="2" class="hidden peer" />
                                                        <label for="2" class="outline-block cursor-pointer w-10 h-10 p-0 text-pink-500 peer-hover:text-gray-300 peer-checked:text-pink-300">
                                                            <i class="fas fa-star"></i>
                                                        </label>
                                                        <input name="satisfaction" type="radio" id="3" value="3" class="hidden peer" />
                                                        <label for="3" class="outline-block cursor-pointer w-10 h-10 p-0 text-pink-500 peer-hover:text-gray-300 peer-checked:text-pink-300">
                                                            <i class="fas fa-star"></i>
                                                        </label>
                                                        <input name="satisfaction" type="radio" id="4" value="4" class="hidden peer" />
                                                        <label for="4" class="outline-block cursor-pointer w-10 h-10 p-0 text-pink-500 peer-hover:text-gray-300 peer-checked:text-pink-300">
                                                            <i class="fas fa-star"></i>
                                                        </label>
                                                        <input name="satisfaction" type="radio" id="5" value="5" class="hidden peer" />
                                                        <label for="5" class="outline-block cursor-pointer w-10 h-10 p-0 text-pink-500 peer-hover:text-gray-300 peer-checked:text-pink-300">
                                                            <i class="fas fa-star"></i>
                                                        </label>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-3">
                                    <div class="mb-5">
                                        <label for="allow" class="mb-3 block text-base font-medium text-[#c81e76] text-left">
                                            By Checking this box you allow us to publish your feedback? <input name="allow" id="allow" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </span>
                                        </label>
                                    </div>

                                    <div class="mb-5">
                                        <label for="honest" class="mb-3 block text-base font-medium text-[#c81e76] text-left">
                                            By Checking this box you agree that you will share your honest feedback? <input name="honest" id="honest" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </span>
                                        </label>
                                    </div>
                                </div>

                            </fieldset>


                            <!-- This is an example component -->
                            <div class="form-layout-footer my-3 text-center ">
                                <button class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md">
                                    Submit
                                </button>

                            </div><!-- form-layout-footer -->
                        </div><!-- form-layout -->
                    </div><!-- section-wrapper -->
                </div>
            </div><!-- col-6 -->

        </form>
    </div>


</body>
@include('includes.footer')

</html>