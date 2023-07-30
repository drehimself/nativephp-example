<x-layout>
    <div>
        <form action="/settings" method="POST">
            @csrf
            <fieldset>
                <legend>Select your theme</legend>

                <div>
                    <input type="radio" id="light" name="theme" value="light" @checked($theme === 'light')>
                    <label for="light">Light</label>
                </div>

                <div>
                    <input type="radio" id="dark" name="theme" value="dark" @checked($theme === 'dark')>
                    <label for="dark">Dark</label>
                </div>
            </fieldset>

            <button type="submit">Save</button>
        </form>
    </div>
</x-layout>
