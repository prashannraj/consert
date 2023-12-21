@extends('layouts.idcard')
@section('content')
    @php
        $theme = \App\Models\Configuration::findorfail(1);
        $class = \App\Models\ClassData::findorfail($data->class_data_id);
    @endphp
    <main class="max-w-screen-md  mx-auto p-8 print:p-0">
        <div class="print:hidden mb-4">
            <a href="/admin/register-forms/{{ $data->id }}" class="px-3 py-2 text-sm text-gray-50 rounded transition-all duration-200 font-medium bg-danger-600 hover:bg-danger-500">Go Back</a>
            <button onclick="printFunction()" class="px-3 py-2 text-sm text-gray-50 rounded transition-all duration-200 font-medium bg-primary-600 hover:bg-primary-500">Print</button>
        </div>
        <div class="relative max-w-lg bg-white rounded border-4 border-dotted border-spacing-4 p-6 border-gray-800">
            <div class="font-medium text-sm absolute top-2 right-3">
                ID: {{ $data->student_id }}
            </div>
            <div>
                <img class="w-full h-auto" src="{{ asset('uploads/'.$theme->config['logo']) }}" alt="icon" />
                <div class="max-w-screen-xl mx-auto px-4 text-center"><strong>Admit Card</strong> </div>
            </div>
            <div class="flex gap-x-3">
                <img class="w-[120px] h-[120px] object-cover rounded" src="{{ asset('uploads/'.$data->student_photo) }}" alt="image" />
                <div>
                    <div class="flex items-center gap-x-[59px]"><strong>Name</strong> <span>: {{ $data->student_name }}</span></div>
                    <div class="flex items-center gap-x-[57px]"><strong>Father</strong> <span>: {{ $data->father_name }}</span></div>
                    <div class="flex items-center gap-x-[67px]"><strong>Post</strong> <span>: {{ $class->name }}</span></div>
                    <div class="flex items-center gap-x-[67px]"><strong>Year</strong> <span>: {{ $class->year }}</span></div>
                    <div class="flex items-center gap-x-[49px]"><strong>Roll No</strong> <span>: {{ $data->class_data_id }}</span></div>
                    <div class="flex items-center gap-x-[20px]"><strong>Contact No</strong> <span>: {{ $data->parents_phone_number }}</span></div>
                </div>
            </div>
            <div class="flex justify-between">
                <div>
                    <img class="aspect-[4/1] w-[120px] object-cover" src="{{ asset('uploads/'.$data->students_sign_photo) }}" alt="student signature" />
                    <div class="text-xs font-medium ml-3">Candidate Signature</div>
                </div>
                <div>
                    <img class="aspect-[4/1] w-[120px] object-cover" src="{{ asset('uploads/'.$theme->config['principal_signature']) }}" alt="principal signature" />
                    <div class="text-xs font-medium">Officer Signature</div>
                </div>
            </div>
         <p>उमेदवारले पालना गर्नुपर्ने नियमहरु :</p>
		<li>परीक्षामा परीक्षार्थीले अनिवार्य रुपमा कालो मसीको मात्र प्रयोग गर्नु पर्नेछ अन्यथा उतरपुस्तिका रद्द हुनेछ ।</li>
		<li>परीक्षा दिन आउँदा अनिवार्य रुपमा प्रवेशपत्र ल्याउनु पर्नेछ । प्रवेशपत्र विना परीक्षामा बस्‍न पाइने छैन ।</li>
		<li>परीक्षा हलमा मोबाइल फोन लाउन पाइने छैन ।</li>
		<li>लिखित परीक्षाको नितजा प्रकाशन भएपछि प्रयोगातम परीक्षा तथा अन्तरर्वार्ता  हुने दिनमा पनि प्रवेशपत्र लाउनु अनिवार्य छ ।</li>
		<li>परीक्षा शुर हुनु भन्दा ३० मिनेट अगाडी घण्टीद्धारा सूचना गरेपछी परीक्षा हलमा प्रवेश गर्न दिइनेछ । वस्तुगत परीक्षा शुरु भएको १५ मिनेट पछि र विषयगत परीक्षा शुरु भएको आधा घण्टा पछि आउने र वस्तुगत तथा विषयगत दुवै  परीक्षा संगै हुनेमा २० मिनेट पिछ आउने उमेदवारले परीक्षामा वस्‍न पाउने छैन ।</li>
		<li>परीक्षा हलमा उमेदवारले परीक्षाको मर्यादा  विपरीत कुनै काम गरेमा केन्द्राध्यक्षले परीक्षा हलबाट निष्काशन गरी तुरुन्त कानून बमोजिमको कारवाही गर्नेछ र त्यसरी निष्काशन गरिएको उमेदवारको  सो विज्ञापनको परीक्षा स्वतः रद भएको मानिने छ ।</li>
		<li>परीक्षा हलमा प्रवेश गरेपिछ किताब, कापी, कागज, चिट आदि आफूसाथ राख्‍नु हुँदैन । उमेदवारले आपसमा कुराकानी र संकेत समेत गर्ननु हुँदैन ।</li>
		<li>बिरामी भएको उमेदवारले परीक्षा हलमा प्रवेश गरी परीक्षा दिने कममा निजलाई केही भएमा कार्यालय जवाफदेही हुने छैन ।</li>
		<li>उमेदवारले परीक्षा दिएको दिनमा हाजिर अनिवार्य रुपले गर्नुपर्नेछ ।</li>
		<li>कार्यालयले सूचनाद्धारा निर्धारण  गरेको कार्यक्रम अनुसार परीक्षा सञालन हुनेछ ।</li>
		<li>उमेदवारले वस्तुगत परीक्षामा आफूलाई प्राप्त प्रश्‍नपत्रको 'की' उतरपुस्तिकामा अनिवार्य रुपले खुलाउनु पर्नेछ । नलेखेमा उतरपुस्तिका सव्तः रद्द हुनेछ ।</li>
		<li>लाकत (आई.कू.) परीक्षामा क्यालकुलेटर प्रयोग गर्न पाइने छैन ।</li>
        </div>
    </main>


    <script>
        window.print();
        function printFunction() {
            window.print();
        }
    </script>
@stop
