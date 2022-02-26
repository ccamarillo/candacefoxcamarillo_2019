Vue.component('ContactFormElement', {
    props: ["form_fields_prop"],
	template: `
        <form class="ajaxForm" id="new-contact" action="" method="POST" @submit=checkForm>
            <div class="form-row" v-for="item in form_fields_prop">
                <div class="col-12">
                    <div v-if="item.type === 'textarea'">
                        <textarea 
                            :placeholder=item.placeholder 
                            class="form-control"
                            :required=item.required
                            :name=item.name
                            @change=setValue
                        />
                    </div>
                    <div v-else>
                        <input 
                            :placeholder=item.placeholder 
                            class="form-control"
                            :type=item.type
                            required=item.required
                            :name=item.name
                            @change=setValue
                        />
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 centered">
                    <button type="submit" class="btn btn-primary">{{ buttonMessage }} &nbsp;&nbsp;<i class="fas fa-lock"></i></button>
                </div>
            </div>
        </form>
    `,
    methods: {
        setValue: function(e) { 
            this[e.target.name] = e.target.value;
            this.buttonMessage = 'Send.';
        },
        checkForm: function(e) { 
            e.preventDefault();
            
            var href = this.formAction;
            this.buttonMessage = 'Sending...';
            self = this;
            grecaptcha.ready(function() {
                grecaptcha.execute('r6LexF6IeAAAAALEqtBdn99nF5aoBuZqB8g6uG7v_', {action: 'submit'}).then(function(token) {
                    if (token.score === 1) {
                        axios.post(this.formAction, {
                            name: this.name,
                            email: this.email,
                            message: this.message
                        }).then(function(response) { 
                            if (response.status === 200) {
                                self.buttonMessage = 'Done!';
                        		self.name = '';
                                self.email = '';
                                self.message = '';	
                            }
                        }).catch(function(response) { 
                            alert('An error occured when sending your message.  Try again in a few minutes.')
                            this.buttonMessage = 'Send.';
                        });
                    } else {
                        alert('No robots allowed.');
                    }
                });
            });
            
        }
    },
    data: function() {
        return {
            formAction: 'https://formcarry.com/s/Q6yhhGiea22',
            name: '',
            email: '',
            message: '',
            buttonMessage: 'Send.'
        }
    }
});

const vueApp = new Vue({
	el: '#app-contact-form',
	data: { 
        formFields: [
            { name: "name", required: true, type: "text", placeholder: "Your name" },
            { name: "email", required: true, type: "email", placeholder: "Your email" },
            { name: "message", required: true, type: "textarea", placeholder: "Your message" }
        ]
	}
});

