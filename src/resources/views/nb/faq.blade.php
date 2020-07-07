@component('info.faq')
## Hvorfor må jeg godta avtalevilkårene og personvernerklæringen?

For at {{ $currentTenant->name }} Røde Kors skal kunne oppfylle avtalevilkårene er vi nødt til å lagre noen personopplysninger om deg, som nevnt i personvernerklæringen.

## Hva om jeg ikke ønsker å godta?

Om du ikke ønsker å godta avtalevilkårene og personvernerklæringen kan du selv stoppe behandlingen av dine data ved å melde deg ut av aktivitene du er aktiv i, eller ta kontakt med {{ $currentTenant->name }} Rød Kors med ønske om dette.

## Hva om jeg har enda et spørsmål?

Ta kontakt med {{ $currentTenant->name }} Røde Kors på epost {{ $currentTenant->email }}, telefon {{ $currentTenant->phone_number }}, eller kom innom {{ $currentTenant->name }} Røde Kors, {{ $currentTenant->address }}.
@endcomponent
