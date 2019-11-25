<template>
    <div class="container">
       <b-form @submit="onSubmit" @reset="onReset" >
            <b-form-group
              id="input-group-1"
              label=" Le Titre de l'Entretien:"
              label-for="input-1"
              description=""
              

            >
              <b-form-input
                id="input-1"
                v-model="form.titre"
                type="text"
                required
                placeholder="Enter le titre"
                
              ></b-form-input>
            </b-form-group>
          <label>Configurer la date de l'entretien:</label>
            <b-form-group id="input-group-2" label="la date de debut de l'entretien:" label-for="input-2">
              <b-form-input
                id="input-2"
                v-model="form.start"
                required
                type='date'
              ></b-form-input>
            </b-form-group>
              <b-form-group id="input-group-2" label="la duree de l'entretien:" label-for="input-2">
              <b-form-input
                id="input-2"
                v-model="form.duration"
                required
                type='date'
                
              ></b-form-input>
            </b-form-group>
            <label>Personnaliser l'entretien:</label>
            <b-form-group label="Skype call et chat">
            <b-form-radio-group
              v-model="selected"
              :options="options"
              name="radios-stacked"
              stacked
            ></b-form-radio-group>

            <b-form-group label="code editor:">
            <b-form-radio-group id="radio-group-2" v-model="selected" name="radio-stacked"  stacked>
              <b-form-radio value="first">code Execution</b-form-radio>
              <b-form-radio value="second">coding languages</b-form-radio>
              <b-form-radio value="third" >default coding languages</b-form-radio>
              
            </b-form-radio-group>
          </b-form-group>














          <label>Configuration du Test/Taches</label>

          <b-form-group
              id="input-group-1"
              label=" Le Titre du test:"
              label-for="input-1"
              description=""
            >
              <b-form-input
                id="input-1"
                v-model="form.titreTest"
                type="text"
                required
                placeholder="Enter le titre du test"
              ></b-form-input>
            </b-form-group>




      <b-form-group
              id="input-group-1"
              label=" La description de l'Entretien:"
              label-for="input-1"
              description=""
            >
              <b-form-input
                id="input-1"
                v-model="form.description"
                type="text"
                required
                placeholder="Enter la description"
              ></b-form-input>
            </b-form-group>
            <label>Definition:</label>
                  </b-form-group>
                  <b-form-group id="input-group-3" label="Language:" label-for="input-3">
                      <b-form-select
                      id="input-3"
                      v-model="form.language"
                      :options="languages"
                      required
                      ></b-form-select>
                  </b-form-group>
                
      <b-form-textarea
            id="textarea-state"
            v-model="text"
            :state="text.length >= 10"
            placeholder="Enter at least 10 characters"
            rows="3"
          ></b-form-textarea>



          






            <b-form-group id="input-group-4">
              <b-form-checkbox-group v-model="form.checked" id="checkboxes-4">
                <b-form-checkbox value="me">Check me out</b-form-checkbox>
                <b-form-checkbox value="that">Check that out</b-form-checkbox>
              </b-form-checkbox-group>
            </b-form-group>

            <b-button type="submit" variant="primary">Submit</b-button>
            <b-button type="reset" variant="danger">Reset</b-button>
    </b-form>
    <b-card class="mt-3" header="Form Data Result">
      <pre class="m-0">{{ form }}</pre>
    </b-card>
    </div>
</template>
<script>
export default {
    layout:'custom',
    data() {
      return {
        text: '',
        form: {
          titre: '',
          start: '',
          duration: '',

          food: null,
          checked: []
        },
        foods: [{ text: 'Select One', value: null }, 'Carrots', 'Beans', 'Tomatoes', 'Corn'],
        show: true,
        selected: 'chat',
        options: [
          { text: 'First radio', value: 'chat' },
          { text: 'Second radio', value: 'call' },
          { text: 'Third radio', value: 'labby' }
        ]
      }
    },
    methods: {
      onSubmit(evt) {
        evt.preventDefault()
        alert(JSON.stringify(this.form))
      },
      onReset(evt) {
        evt.preventDefault()
        // Reset our form values
        this.form.titre = ''
        this.form.start = ''
        this.form.food = null
        this.form.checked = []
        // Trick to reset/clear native browser form validation state
        this.show = false
        this.$nextTick(() => {
          this.show = true
        })
      }
    }
}
</script>