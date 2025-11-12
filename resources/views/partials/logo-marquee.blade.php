<section class="trusted-by-logos">
    <div class="container">
        <h2>Trusted by Leading Industry Players</h2>
        <div class="logo-marquee"> 
            <div class="marquee-inner">
                @foreach($logos as $logo)
                    <div class="logo-item">
                        <img src="{{ asset($logo) }}" alt="Company logo">
                    </div>
                @endforeach
                {{-- duplicate for smooth loop --}}
                @foreach($logos as $logo)
                    <div class="logo-item">
                        <img src="{{ asset($logo) }}" alt="Company logo">
                    </div>
                @endforeach 
            </div>
        </div>
    </div>
</section>
