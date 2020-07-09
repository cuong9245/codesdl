<li class="{{ Request::is('banners*') ? 'active' : '' }}">
    <a href="{{ route('banners.index') }}"><i class="fa fa-edit"></i><span>Banners</span></a>
</li>

<li class="{{ Request::is('tours*') ? 'active' : '' }}">
    <a href="{{ route('tours.index') }}"><i class="fa fa-edit"></i><span>Tours</span></a>
</li>

<!-- <li class="{{ Request::is('imageTours*') ? 'active' : '' }}">
    <a href="{{ route('imageTours.index') }}"><i class="fa fa-edit"></i><span>Image Tours</span></a>
</li> -->

<!-- <li class="{{ Request::is('places*') ? 'active' : '' }}">
    <a href="{{ route('places.index') }}"><i class="fa fa-edit"></i><span>Places</span></a>
</li> -->

<li class="{{ Request::is('cities*') ? 'active' : '' }}">
    <a href="{{ route('cities.index') }}"><i class="fa fa-edit"></i><span>Cities</span></a>
</li>

<li class="{{ Request::is('whySelects*') ? 'active' : '' }}">
    <a href="{{ route('whySelects.index') }}"><i class="fa fa-edit"></i><span>Why Selects</span></a>
</li>

<!-- <li class="{{ Request::is('programTours*') ? 'active' : '' }}">
    <a href="{{ route('programTours.index') }}"><i class="fa fa-edit"></i><span>Program Tours</span></a>
</li> -->

<li class="{{ Request::is('news*') ? 'active' : '' }}">
    <a href="{{ route('news.index') }}"><i class="fa fa-edit"></i><span>News</span></a>
</li>


<li class="{{ Request::is('menus*') ? 'active' : '' }}">
    <a href="{{ route('menus.index') }}"><i class="fa fa-edit"></i><span>Menus</span></a>
</li>

<li class="{{ Request::is('groupTours*') ? 'active' : '' }}">
    <a href="{{ route('groupTours.index') }}"><i class="fa fa-edit"></i><span>Group Tours</span></a>
</li>

<li class="{{ Request::is('promotions*') ? 'active' : '' }}">
    <a href="{{ route('promotions.index') }}"><i class="fa fa-edit"></i><span>Promotions</span></a>
</li>

<li class="{{ Request::is('rewriteWords*') ? 'active' : '' }}">
    <a href="{{ route('rewriteWords.index') }}"><i class="fa fa-edit"></i><span>Rewrite Words</span></a>
</li>

<li class="{{ Request::is('introduces*') ? 'active' : '' }}">
    <a href="{{ route('introduces.index') }}"><i class="fa fa-edit"></i><span>Introduces</span></a>
</li>

<li class="{{ Request::is('commentClients*') ? 'active' : '' }}">
    <a href="{{ route('commentClients.index') }}"><i class="fa fa-edit"></i><span>Comment Clients</span></a>
</li>

<li class="{{ Request::is('contactsClients*') ? 'active' : '' }}">
    <a href="{{ route('contactsClients.index') }}"><i class="fa fa-edit"></i><span>Contacts Clients</span></a>
</li>

<li class="{{ Request::is('faqs*') ? 'active' : '' }}">
    <a href="{{ route('faqs.index') }}"><i class="fa fa-edit"></i><span>Faqs</span></a>
</li>

<li class="{{ Request::is('tickets*') ? 'active' : '' }}">
    <a href="{{ route('tickets.index') }}"><i class="fa fa-edit"></i><span>Tickets</span></a>
</li>

