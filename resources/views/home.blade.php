@extends('layouts.app')
@section('content')
    <div class="flex flex-col md:flex-row mt-8">
      <div class="w-full md:w-1/2 md:pr-2 mb-4 md:mb-0">
        <div class="flex border border-grey-light rounded overflow-hidden shadow">
          <div class="w-full lg:w-2/3 p-4">
            <span class="block font-bold text-blue mb-3">
                            World
                        </span>
            <h3 class="">
              <a href="#" class="font-serif font-bold no-underline hover:underline text-3xl text-black">
                                Featured post
                            </a>
            </h3>
            <span class="font-sans text-grey-dark">
                            Nov 12
                        </span>
            <p class="text-grey-darkest leading-normal mt-2 mb-6">
              This is a wider card with supporting text below as a natural lead-in to additional content.
            </p>
            <a href="#" class="no-underline hover:underline text-blue">
                            Continue reading
                        </a>
          </div>
          <div class="hidden lg:block lg:w-1/3">
            <img class="w-full" data-src="holder.js/200x240?theme=thumb" alt="Card image cap">
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 md:pl-2">
        <div class="flex border border-grey-light rounded overflow-hidden shadow">
          <div class="w-full lg:w-2/3 p-4">
            <span class="block font-bold text-green mb-3">
                            Design
                        </span>
            <h3 class="">
              <a href="#" class="font-serif font-bold no-underline hover:underline text-3xl text-black">
                                Post title
                            </a>
            </h3>
            <span class="font-sans text-grey-dark">
                            Nov 11
                        </span>
            <p class="text-grey-darkest leading-normal mt-2 mb-6">
              This is a wider card with supporting text below as a natural lead-in to additional content.
            </p>
            <a href="#" class="no-underline hover:underline text-blue">
                            Continue reading
                        </a>
          </div>
          <div class="hidden lg:block lg:w-1/3">
            <img class="w-full" data-src="holder.js/200x240?theme=thumb" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>

    <div class="flex flex-col md:flex-row mt-8">
      <div class="w-full md:w-2/3 md:pr-4">
        <h4 class="italic font-serif border-b border-grey-light text-3xl pb-2 mb-8">
          From the Firehose
        </h4>

        <div class="font-sans leading-normal">
          <h3 class="font-serif text-5xl text-black mb-2">
            Sample blog post
          </h3>

          <p class="mb-3">
            This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
          </p>

          <hr>

          <p class="mb-3">
            Cum sociis natoque penatibus et magnis <a href="#" class="no-underline hover:underline text-blue">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere
            consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.
          </p>

          <p class="mb-3">
            Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.
          </p>

          <p class="mb-3">
            Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.
          </p>

          <h4 class="font-serif text-3xl text-black mt-4">
            Heading
          </h4>
          <p class="mb-3">
            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
          </p>

          <h5 class="font-serif text-2xl text-black mt-4">
            Sub-heading
          </h5>
          <p class="mb-3">
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
          </p>

          <p class="mb-3">
            <code class="font-mono">
                            Example code block
                        </code>
          </p>

          <p class="mb-3">
            Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.
          </p>

          <h5 class="font-serif text-2xl text-black mt-4">
            Sub-heading
          </h5>
          <p class="mb-3">
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
            ut fermentum massa justo sit amet risus.
          </p>

          <ul class="mb-3">
            <li>
              Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
            </li>
            <li>
              Donec id elit non mi porta gravida at eget metus.
            </li>
            <li>
              Nulla vitae elit libero, a pharetra augue.
            </li>
          </ul>

          <p class="mb-3">
            Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.
          </p>

          <ol class="mb-3">
            <li>Vestibulum id ligula porta felis euismod semper.</li>
            <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
            <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
          </ol>

          <p class="mb-3">
            Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.
          </p>
        </div>

        <div class="my-8">
          <button class="font-sans bg-transparent hover:bg-blue border border-blue rounded-full text-blue hover:text-white p-2">
                        Older
                    </button>
          <button class="font-sans bg-transparent border border-grey rounded-full text-grey p-2 cursor-not-allowed" disabled>
                        Newer
                    </button>
        </div>
      </div>

      <div class="w-full md:w-1/3 md:pl-4">
        <div class="bg-grey-lighter rounded p-4 mb-6">
          <h4 class="italic font-serif text-2xl text-black mb-3">
            About
          </h4>
          <p class="leading-normal">
            Etiam porta <i>sem malesuada magna</i> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.
          </p>
        </div>

        <div class="p-4 mb-6">
          <h4 class="italic font-serif text-2xl text-black mb-3">
            Archives
          </h4>
          <ul class="list-reset">
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">March 2014</a>
            </li>
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">February 2014</a>
            </li>
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">January 2014</a>
            </li>
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">December 2013</a>
            </li>
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">November 2013</a>
            </li>
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">October 2013</a>
            </li>
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">September 2013</a>
            </li>
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">August 2013</a>
            </li>
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">July 2013</a>
            </li>
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">June 2013</a>
            </li>
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">May 2013</a>
            </li>
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">April 2013</a>
            </li>
          </ul>
        </div>

        <div class="p-4 mb-6">
          <h4 class="italic font-serif text-2xl text-black mb-3">
            Elsewhere
          </h4>

          <ul class="list-reset">
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">
                                Github
                            </a>
            </li>
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">
                                Twitter
                            </a>
            </li>
            <li class="my-1">
              <a href="#" class="no-underline hover:underline text-blue">
                                Facebook
                            </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
 @endsection
