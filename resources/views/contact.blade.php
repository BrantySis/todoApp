<x-layout>
    <x-slot:heading>
        Contact 
    </x-slot>

    <div class="container mt-5">
        <h1>Contact Us</h1>
        <p class="lead">We'd love to hear from you! Please fill out the form below to get in touch.</p>

        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>

        <div class="mt-5">
            <h2>Our Location</h2>
            <p>123 Main Street, City, Country</p>
            <p>Email: info@example.com</p>
            <p>Phone: (123) 456-7890</p>
        </div>
    </div>
</x-layout>
