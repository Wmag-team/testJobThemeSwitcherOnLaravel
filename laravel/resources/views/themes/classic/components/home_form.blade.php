<h1>Classic - HOME</h1>
<p>This is the home page content.</p>

<form action="/set-theme" method="POST">
    @csrf
    <label for="theme">Select Theme:</label>
    <select name="theme" id="theme">
        <option value="classic">Classic</option>
        <option value="cuba">Cuba</option>
    </select>
    <button type="submit">Save Theme</button>
</form>
