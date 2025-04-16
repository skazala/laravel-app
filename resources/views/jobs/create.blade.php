<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="{{ route('store_job') }}">
        <x-forms.input label="Title" name="title" placeholder="CSI" />
        <x-forms.input label="Salary" name="salary" placeholder="$50,000" />
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>
        
        <x-forms.input label="URL" name="url" placeholder="https://dummy-url.com" />
        <x-forms.checkbox label="Feature (Costs Extra $$$)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="video, frontend, education" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>