<section class="tag-cloud-section">
    <h5 class="tag-cloud-title">Vind via een gemeente</h5>
    <div class="tag-cloud">
        <a class="tag-cloud-individual-tag" href="{{ route('home') }}">Alles tonen</a>
            <?php
            $isMatch = false;
            foreach(range('A', 'Z') AS $letter)
            {   
                foreach( $cities->sortBy('name') AS $city )
                {
                    if(strtoupper(substr($city->name, 0, 1)) ===  $letter)
                    {
                        if(!$isMatch) {
                            $isMatch = true;
                            echo "<p>" . $letter . "</p>";
                        }
                        ?> 
                        <a class="tag-cloud-individual-tag" href="{{ route('city.show', $city->name) }}">{{ $city->name }}: {{ $city->amount }}</a>
                        <?php
                    }
                }
                $isMatch = false;
            }
            ?>
        </div>
    </div>
</section>