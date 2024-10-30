<x-layout>

<x-page-heading>New Job</x-page-heading>

<x-forms.form method="POST" action="/jobs">

<x-forms.input label="Title" name="title" placeholder="CEO"/>
<x-forms.input label="Salary" name="salary" placeholder="90,000$"/>
<x-forms.input label="Location" name="location" placeholder="Amman"/>

<x-forms.select label="Schedule" name="schedule"> 
 <option>Part Time</option>
 <option>Full Time</option>
</x-forms.select>

<x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>
<x-forms.checkbox label="Feature (Costs Extra)" name="Featured" />

<x-forms.divider />

<x-forms.input label="Tags (Comma seperated)" name="tags" placeholder="Laracasts , Video , Education"/>

<x-forms.button>Publish</x-forms.button>

</x-forms.form>

</x-layout>