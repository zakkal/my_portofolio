@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block; text-decoration: none;">
@if (trim($slot) === 'Zaki' || trim($slot) === 'Laravel')
<div style="display: inline-block; background-color: #0B1120; border-radius: 12px; width: 48px; height: 48px; text-align: center; line-height: 48px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 24px; font-weight: bold; color: #10B981; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">Z</div>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
