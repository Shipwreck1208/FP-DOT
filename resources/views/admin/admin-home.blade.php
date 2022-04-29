@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    Welcome <span class="text-lg font-bold">{{Auth::user()->name}}</span>
                    You are logged in!
                </p>
            </div>
        </section>
            <a class="bg-black text-yellow-300 hover:text-white p-3 mt-5 rounded font-bold" href="/categories">Categories</a>
            <a class="bg-black text-yellow-300 hover:text-white p-3 mt-5 rounded font-bold" href="/products">Photos</a>
            <a class="bg-black text-yellow-300 hover:text-white p-3 mt-5 rounded font-bold" href="/event">Events</a>
            <a class="bg-black text-yellow-300 hover:text-white p-3 mt-5 rounded font-bold" href="/users">Users</a>

            <div class="bg-black text-yellow-300 hover:text-white p-3 m-6 rounded-2xl font-bold">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed eos quam culpa pariatur modi adipisci, maxime accusamus vero ab reiciendis mollitia, non fugit soluta cumque, blanditiis quaerat eligendi doloremque dicta facilis debitis quibusdam? Recusandae mollitia odit voluptas sapiente perspiciatis saepe veritatis corporis sit similique praesentium, voluptate harum architecto maxime aspernatur placeat aut iste! Nam, soluta? Quis quas facere eos doloremque fugiat sequi perspiciatis ipsam repellat atque vel, nam delectus impedit deleniti neque aperiam hic cupiditate dicta error cum blanditiis est. Nam harum maiores eaque inventore delectus temporibus minima doloremque. Tempore fuga ex itaque molestias rem aliquid sed. Enim, similique veniam? Nisi, rerum voluptates, maxime magnam aspernatur reprehenderit nihil maiores assumenda, odit magni inventore obcaecati velit praesentium ut sed sequi deserunt aut laboriosam. Nisi eius, laborum facilis quos quisquam officiis officia quas? Perspiciatis exercitationem sed omnis voluptatibus deserunt est eligendi sit totam similique perferendis quisquam minima facere quis et animi minus, voluptatem doloremque harum hic. Corrupti veniam quidem natus, voluptas sunt facere harum fuga quasi alias autem tenetur vel velit eius cumque iste odio quaerat, assumenda ducimus quae fugit tempora at consequuntur eos? Odit quasi ex labore. Sapiente recusandae consequatur laboriosam nihil voluptatem perferendis commodi minima sunt hic repellendus et quam voluptatum quos quo tenetur, molestias, sint omnis. Vitae placeat, voluptatem harum quisquam officiis ipsam illum, autem fuga numquam magnam repellendus atque impedit tempora repudiandae consequuntur inventore amet pariatur possimus. Aspernatur ut explicabo amet quidem perspiciatis facilis rem voluptas recusandae tempore alias provident quo hic sit odit dignissimos fugit eum vero perferendis est in, magnam optio! Voluptatibus facere quam excepturi necessitatibus nihil tenetur illo, facilis nobis obcaecati incidunt quae possimus consequatur dolores laborum aut deleniti id, atque laudantium voluptates quas doloremque similique repellendus fugit! Eius ipsam, voluptate maxime dolorem ipsum cum iusto assumenda consectetur nihil beatae dolore dolores earum at corrupti autem perferendis velit, quae aliquam dolorum excepturi adipisci, laudantium ratione voluptates saepe. Corrupti eligendi, necessitatibus aut optio saepe voluptatibus placeat possimus! In quae asperiores optio velit nihil id esse exercitationem cupiditate. Nisi quidem quae voluptatem officiis aut nobis explicabo voluptatibus, laborum voluptatum, consequatur sapiente corrupti in nesciunt eius odio necessitatibus. Quod, quo harum vitae ea totam officia deleniti nemo, quia inventore voluptatibus, excepturi cupiditate? Quas architecto ut recusandae qui perspiciatis saepe corrupti nesciunt fugiat sed. Dignissimos, modi fugiat. Repellat vel beatae neque atque doloremque, cum maiores hic obcaecati! Dolores temporibus velit tempore omnis sed, illo quia vel ducimus culpa repellat iure dicta, ipsum assumenda incidunt minima eligendi voluptate harum, repellendus voluptatibus. Eum officiis quia dolorem laboriosam similique tempora adipisci consequatur inventore odio, eius placeat, explicabo, perspiciatis modi reprehenderit incidunt culpa porro cumque esse fugit nesciunt soluta vitae accusamus exercitationem. Sed saepe animi molestias laudantium nesciunt nam non dolorem voluptatum sapiente modi atque officia odit consectetur inventore, sit alias odio blanditiis maiores eius dolore omnis mollitia laborum quaerat! Porro ipsam laudantium nemo quis quos, tenetur sit saepe? Amet, eligendi, sed rerum, laboriosam earum architecto error minus obcaecati repellat voluptatibus blanditiis similique? Dicta iste ipsum, voluptate magni a qui nobis soluta cumque!
            </div>
        </div>
    </div>
</main>
@endsection
