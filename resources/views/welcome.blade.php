<x-layout>
    <x-slot:heading>
        Welcome MGA TANG INA
    </x-slot>

    <div class="container mt-5">
        <h1>Welcome to Our Application</h1>
        <p class="lead">We're glad to have you here. Explore our features and enjoy your experience!</p>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Feature 1</h5>
                        <p class="card-text">Discover how our first feature can help you achieve your goals.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Feature 2</h5>
                        <p class="card-text">Find out more about the benefits of our second feature.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Feature 3</h5>
                        <p class="card-text">See how our third feature can make your life easier.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="mt-5">
            <p class="text-center">&copy; {{ date('Y') }} Your Company. All Rights Reserved.</p>
        </footer>
    </div>
</x-layout>
