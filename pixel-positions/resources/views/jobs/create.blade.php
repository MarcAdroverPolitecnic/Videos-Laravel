<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="50,000" />
        <x-forms.input label="Location" name="location" placeholder="Florida" />

        <x-forms.select label="Schedule" name="schedule">
            <optio>Pert time</optio>
            <optio>Full time</optio>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"></x-forms.checkbox>

        <x-forms.divider/>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="php, laravel" />

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>
