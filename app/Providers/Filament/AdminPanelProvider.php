<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\Blade;
use Filament\Navigation\NavigationGroup;
use Filament\Http\Middleware\Authenticate;
use Filament\Support\Facades\FilamentView;
use Filament\SpatieLaravelTranslatablePlugin;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
        ->default()
        ->id('admin')
        ->path('studio')
        ->login()
        ->passwordReset()
        ->sidebarCollapsibleOnDesktop()
        ->favicon('/favicon/favicon.ico')
        ->brandLogo('/assets/logo/logo-dark.png')
        ->darkModeBrandLogo('/assets/logo/logo.png')
        ->brandLogoHeight(fn() => auth()->check() ? '40px' : '100px')
        ->colors([
            'primary' => Color::hex('#013333'),
            'gray' => Color::Slate,
        ])
            ->discoverResources(in: app_path('Filament/Admin/Resources'), for: 'App\\Filament\\Admin\\Resources')
            ->discoverPages(in: app_path('Filament/Admin/Pages'), for: 'App\\Filament\\Admin\\Pages')
            ->pages([
            ])
            ->discoverWidgets(in: app_path('Filament/Admin/Widgets'), for: 'App\\Filament\\Admin\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('Strona główna')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Galeria')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Kontakt')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Lokalizacja')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('O nas')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Restauracja')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Pokoje')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Transfery i wycieczki')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Sekcje globalne')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Strony informacyjne')
                    ->collapsed(),
                
         
            ])
             ->plugin(SpatieLaravelTranslatablePlugin::make()->defaultLocales(['pl', 'en']),);
    }

        public function register(): void
    {
        parent::register();
        FilamentView::registerRenderHook('panels::body.end', fn(): string => Blade::render("@vite('resources/js/app.js')"));
    }

}
