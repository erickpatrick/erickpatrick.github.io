@extends('_layouts.master')

@section('body')
    <div class="container">
        <p>Oh, hi!</p>
        
        <h1 class="salutation">I'm <em>Erick Patrick</em>.</h1>
        
        <p>If you're looking for further information about me, you just got to the right place.</p>
        
        <p>Right, where to start... So, I come from <strong class="brazil">Brazil</strong> but am living in <strong class="germany">Germany</strong> with my wife and first born for the last {{ date('Y') - 2015 }} years, now. Amazing place, you should come visit one day.</p>
        
        <p>If you still have no clue about what I do, I'm a <strong>web software architect</strong> working for <em class="nintendo">Nintendo</em>. Fancy position, right? Yeah, I like it too, but what it means is that I plan and execute the creation of web systems. Before working there, I worked for <a href="{{ $page->site->domain  }}/pages/jobs" title="List of previous works/job positions">some other nice companies</a> from Brazil and Germany, and <a href="{{ $page->site->domain  }}/pages/services" title="List of skills and knowledge gathered throughout studies and works">in other roles and activities</a> as well.</p>
        
        <p>Ah, yes, <a href="{{ $page->site->domain }}/translations" title="List of translations by Erick Patrick">translating things</a> is also something you can say I do. I also help <a href="https://tutsplus.com/" title="Free How-To Tutorials &amp; Online Courses by Envato Tuts+">Envato Tuts+</a> publishing other people translations. Occasionally, I take my rust fingers for a ride and <a href="{{ $page->site->domain }}/articles" title="List of programming posts by Erick Patrick">write things</a>. </p> 
        
        <p>I have some side-projects too! I keep some <a href="https://github.com/erickpatrick" title="Erick Patrick's Github profile page">open-source projects</a> and help others through code or documentation/translation. There is also another one: <a href="https://instagram.com/erickpatrick1988" title="Erick Patrick's Instagram profile page">visiting historical places and parks</a>.</p>

        <p>You can find me at various places around the interwebs. My favorite ones are <a href="{{ $page->site->social->twitter->author }}" title="Erick Patrick's Twitter profile page">Twitter</a> and <a href="{{ $page->site->social->facebook->author }}" title="Erick Patrick's Facebook profile page">Facebook</a>. But you can find my through <a href="mailto:contato@erickpatrick.net" title="Erick Patrick's email contact">email</a> and even through <a href="https://linkedin.com/in/erickpatrick" title="Erick Patrick's Linkedin profile page">LinkedIn</a>. Yeah, I know, that's crazy...</p>
    </div>
@endsection

@section('footer')
    <footer class="container">
        <p>&copy; {{ date('Y') }} Erick Patrick</p>
    </footer>
@endsection
