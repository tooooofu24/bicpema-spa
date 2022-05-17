<script setup>
import Button from 'primevue/button';
import InputText from 'primevue/inputtext';
import CascadeSelect from 'primevue/cascadeselect';
import Card from 'primevue/card';
import FileUpload from 'primevue/fileupload';
import Textarea from 'primevue/textarea';
</script>
<template>
  <main class="w-full p-5">
    <Card>
      <template #title> New Experiment </template>
      <template #content>
        <div>
          <form action="">
            <div class="p-fluid grid mt-2">
              <div class="field col-12 md:col-6">
                <label for="inputtext-left">Title</label>
                <span class="p-float-label p-input-icon-left">
                  <i class="pi pi-book" />
                  <InputText id="inputtext-left" type="text" />
                </span>
              </div>
              <div class="field col-12 md:col-6">
                <label for="cascadeSelect">Category</label>
                <span class="p-float-label">
                  <CascadeSelect
                    id="cascadeSelect"
                    :options="cascadeCountries"
                    option-label="cname"
                    option-group-label="name"
                    :option-group-children="['states', 'cities']"
                  />
                </span>
              </div>
              <div class="field col-12 md:col-6">
                <label for="file">File</label>
                <FileUpload id="file" mode="basic" name="demo[]" url="./upload" />
              </div>
              <div class="field col-12 md:col-6">
                <label for="file">File</label>
                <FileUpload id="file" mode="basic" name="demo[]" url="./upload" />
              </div>
              <div class="field col-12">
                <label for="">Description</label>
                <Textarea :auto-resize="true" rows="2" />
              </div>
            </div>
          </form>
        </div>
      </template>
    </Card>
  </main>
</template>
<script>
export default {
    data() {
        return {
            cascadeCountries: [
                {
                    name: 'Australia',
                    code: 'AU',
                    states: [
                        {
                            name: 'New South Wales',
                            cities: [
                                { cname: 'Sydney', code: 'A-SY' },
                                { cname: 'Newcastle', code: 'A-NE' },
                                { cname: 'Wollongong', code: 'A-WO' },
                            ],
                        },
                        {
                            name: 'Queensland',
                            cities: [
                                { cname: 'Brisbane', code: 'A-BR' },
                                { cname: 'Townsville', code: 'A-TO' },
                            ],
                        },
                    ],
                },
                {
                    name: 'Canada',
                    code: 'CA',
                    states: [
                        {
                            name: 'Quebec',
                            cities: [
                                { cname: 'Montreal', code: 'C-MO' },
                                { cname: 'Quebec City', code: 'C-QU' },
                            ],
                        },
                        {
                            name: 'Ontario',
                            cities: [
                                { cname: 'Ottawa', code: 'C-OT' },
                                { cname: 'Toronto', code: 'C-TO' },
                            ],
                        },
                    ],
                },
                {
                    name: 'United States',
                    code: 'US',
                    states: [
                        {
                            name: 'California',
                            cities: [
                                { cname: 'Los Angeles', code: 'US-LA' },
                                { cname: 'San Diego', code: 'US-SD' },
                                { cname: 'San Francisco', code: 'US-SF' },
                            ],
                        },
                        {
                            name: 'Florida',
                            cities: [
                                { cname: 'Jacksonville', code: 'US-JA' },
                                { cname: 'Miami', code: 'US-MI' },
                                { cname: 'Tampa', code: 'US-TA' },
                                { cname: 'Orlando', code: 'US-OR' },
                            ],
                        },
                        {
                            name: 'Texas',
                            cities: [
                                { cname: 'Austin', code: 'US-AU' },
                                { cname: 'Dallas', code: 'US-DA' },
                                { cname: 'Houston', code: 'US-HO' },
                            ],
                        },
                    ],
                },
            ],
        };
    },
};
</script>
