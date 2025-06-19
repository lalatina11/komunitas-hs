<button class="btn" id="modeToggle">
    <svg id="SUN" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <circle cx="12" cy="12" r="4" />
            <path
                d="M12 3v1m0 16v1m-9-9h1m16 0h1m-2.636-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m11.314 11.314l.707.707" />
        </g>
    </svg>
    <svg id="MOON" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 3a6 6 0 0 0 9 9a9 9 0 1 1-9-9" />
    </svg>
</button>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const setTheme = (theme) => {
            if (theme) {
                document.documentElement.setAttribute('data-theme', theme)
            } else {
                const currentTheme = localStorage.getItem('theme') || 'light'
                localStorage.setItem('theme', currentTheme === 'dark' ? 'light' : 'dark')
                document.documentElement.setAttribute('data-theme', currentTheme === 'dark' ? 'light' : 'dark')
            }
            const currentTheme = localStorage.getItem('theme') || 'light'
            SUN.style.display = currentTheme === 'dark' ? 'block' : 'none'
            MOON.style.display = currentTheme === 'dark' ? 'none' : 'block'
        }
        const savedTheme = localStorage.getItem('theme') || 'light'
        setTheme(savedTheme)
        modeToggle.onclick = () => setTheme()
    })
</script>