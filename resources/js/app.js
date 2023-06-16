import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


Vue.component('candidate-create-component', require('./components/candidate/CandidateCreateComponent').default);
