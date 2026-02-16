<div style="background-color: #f9f9f9; padding: 20px;">
    <h4 style="color: #333; margin: 0;">
        <b>
            Cordialement,<br>
            {{ \App\Models\Website::getSettings()->application_name }} <br>
            {{ config('app.url') }}
        </b>
    </h4>
    <div style="border-bottom: 1px solid #ccc; margin: 10px 0;"></div>
    <div style="text-align: center; color: #777; margin-top: 20px;">
        © {{ date('Y') }} {{ \App\Models\Website::getSettings()->application_name }}. @lang('All rights reserved.')
    </div>
</div>
