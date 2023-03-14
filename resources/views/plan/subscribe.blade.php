<x-layouts.app title="Home" meta-description="Home meta description">


    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;

            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }



        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;

        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>

    <br>
    <br>
    <br>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="p-6">

                <form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{route('plan.subscribe.post')}}" method="post" id="payment-form" data-secret="{{ $intent->client_secret }}">
                    @csrf
                    <div class="w-1/2 form-row">
                        <label class="dark:text-white" for="cardholder-name">Nombre de la Persona</label>
                        <br>
                        <br>
                        <div>
                            <input type="text" id="cardholder-name" class=" px-2 py-2 border">
                        </div>

                        <input type="radio" name="plan" id="standard" value="price_1MUyueCFZvRc8rDiNvvVb05D" checked>
                        <label class="dark:text-white" for="standard">Mensual - S/5</label> <br>

                        <input type="radio" name="plan" id="premium" value="price_1MUyvtCFZvRc8rDiyIXWPobm">
                        <label class="dark:text-white" for="premium">Anual - S/50</label>
                        <br>
                        <br>
                        <label class="dark:text-white" for="card-element">
                            Numero de Tarjeta
                        </label>
                        <br>
                        <br>

                        <div id="card-element">
                        </div>

                        <div id="card-errors" role="alert"></div>

                    </div>
                    <br>
                    <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">
                        Nueva suscripcion
                    </button>
                </form>
            </div>

        </div>
    </div>

    @push('scripts')

    <script src="https://js.stripe.com/v3/"></script>

    <script>
        var stripe = Stripe('pk_test_51MUxeQCFZvRc8rDiy6wZpItlOAtBxPXmkg9AkMmSKSPhBJClIrZZ9o1Qs65fF0hcRciLDOB2GiHDPwHnbuKval8M00DgGDSTc4');

        var elements = stripe.elements();

        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        var card = elements.create('card', {
            style: style
        });

        card.mount('#card-element');

        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        var form = document.getElementById('payment-form');
        var cardHolderName = document.getElementById('cardholder-name');
        var clientSecret = form.dataset.secret;

        form.addEventListener('submit', async function(event) {
            event.preventDefault();

            const { setupIntent, error} = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            );

            if (error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
                
            } else {
                
                stripeTokenHandler(setupIntent);
            }

            // stripe.createToken(card).then(function(result) {
            //     if (result.error) {
            //         var errorElement = document.getElementById('card-errors');
            //         errorElement.textContent = result.error.message;
            //     } else {
            //         stripeTokenHandler(result.token);
            //     }
            // });
        });

        function  stripeTokenHandler(setupIntent) {
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'paymentMethod');
            hiddenInput.setAttribute('value', setupIntent.payment_method);
            form.appendChild(hiddenInput);

            form.submit();
        }
    </script>
    @endpush
</x-layouts.app>