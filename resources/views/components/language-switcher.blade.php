<div class="language-switcher">
    <a href="{{ route('lang.switch', ['lang' => 'en']) }}" class="{{ App::getLocale() === 'en' ? 'active' : '' }}">
        English
    </a>
    |
    <a href="{{ route('lang.switch', ['lang' => 'ar']) }}" class="{{ App::getLocale() === 'ar' ? 'active' : '' }}">
        العربية
    </a>
</div>
