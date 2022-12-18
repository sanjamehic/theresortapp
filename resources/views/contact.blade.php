<x-layout>

    <section id="contact" class="contact-form">
        <h2>Contact us</h2>
        <hr>

        <div class="mb-3">
            <label for="contact" class="form-label">Name</label>
            <input class="form-control" type="text" placeholder="ex. Jane Doe" aria-label="name">
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Email address</label>
            <input type="email" class="form-control" id="contact" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="textarea" class="form-label">Example textarea</label>
            <textarea class="form-control" id="textarea" rows="3"></textarea>
        </div>

        <form action="C:\laragon\www\theresort-repo\reservations.html">
            <input type="submit" class="btn mt-auto" value="Send">
        </form>

    </section>

    <hr>

    <div id="address">
        <p id="logo">Mountain Creek Resort</p>
        <p>Mountain road 7</p>
        <p>Arlington Heights</p>
        <p>Illinois</p>
        <p>60005</p>
        <p>+630-547-0141</p>
    </div>
    <hr>
    <x-newsletter />

</x-layout>
