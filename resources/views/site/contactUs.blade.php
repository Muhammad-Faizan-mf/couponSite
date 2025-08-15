@extends('site.layout')

@section('content')
  <div class="container py-5" style="max-width: 800px; margin: auto;">

    <h1 class="fw-bold text-center mb-4">Contact Us</h1>

    <div class="text-center mb-4">
        <p><strong>Website:</strong> <a href="https://captaindiscounts.com" target="_blank">captaindiscounts.com</a></p>
        <p><strong>Email:</strong> <a href="mailto:info@captaindiscounts.com">info@captaindiscounts.com</a></p>
        <p><strong>Affiliate Queries:</strong> <a href="mailto:affiliate@captaindiscounts.com">affiliate@captaindiscounts.com</a></p>
    </div>

    <div class="card shadow-lg border-0">
        <div class="card-body p-4">
            <h3 class="fw-bold text-center mb-4">Send Us a Message</h3>

            <form method="POST"
             {{-- action="{{ route('contact.submit') }}" --}}
             >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Your Name</label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter your full name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email address" required>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label fw-bold">Subject</label>
                    <input type="text" class="form-control form-control-lg" id="subject" name="subject" placeholder="Enter the subject" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label fw-bold">Message</label>
                    <textarea class="form-control form-control-lg" id="message" name="message" rows="5" placeholder="Type your message here..." required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg px-5 fw-bold">Send Message</button>
                </div>
            </form>
        </div>
    </div>

</div>

<style>
    body {
        background-color: #f9f9f9;
    }
    .card {
        border-radius: 12px;
    }
    .form-control {
        border-radius: 8px;
    }
</style>



@endsection
