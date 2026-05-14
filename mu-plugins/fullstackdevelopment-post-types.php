<?php
/*
  Plugin Name: Fullstackdevelopment Post Types
  Version: 1.0
  Author: chidraeve
  Author URI: https://fullstackdevelopment.de
*/

	add_action('init', 'fullstackdevelopment_post_types');
	
	function fullstackdevelopment_post_types() {
        /**
         * Gemeinsame Standard-Konfiguration
         * für öffentliche Content-Post-Types.
         *
         * Ziel:
         * - konsistente Gutenberg-Unterstützung
         * - einheitliche Archiv-/Single-Struktur
         * - weniger Redundanz bei register_post_type()
         *
         * Wird aktuell verwendet für:
         * - Projekte
         * - Quellen
         * - Dozenten
         *
         * Hinweis:
         * Einzelne Post Types können zusätzliche
         * Argumente ergänzen oder überschreiben.
         */
        $common = [
            'public'       => true,

            /**
             * Aktiviert Archivseiten:
             * /project/
             * /source/
             */
            'has_archive'  => true,

            /**
             * Aktiviert Gutenberg / REST API.
             */
            'show_in_rest' => true,

            /**
             * Aktivierte Core-Features
             * des WordPress-Editors.
             */
            'supports'     => [
                /**
                 * Titel-Feld.
                 */
                'title',

                /**
                 * Gutenberg-Inhaltsbereich.
                 */
                'editor',

                /**
                 * Zuordnung eines Autors.
                 */
                'author',

                /**
                 * Beitragsbild / Featured Image.
                 */
                'thumbnail',

                /**
                 * Textauszug / Excerpt.
                 */
                'excerpt',

                /**
                 * Kommentare.
                 *
                 * Optional und ggf. später entfernbar,
                 * falls Diskussionen nicht benötigt werden.
                 */
                'comments',

                /**
                 * Revisions / Wiederherstellung älterer Versionen.
                 */
                'revisions',
            ],
        ];

        /**
         * Quellen repräsentieren externe Lernressourcen.
         *
         * Dazu gehören:
         * - Udemy-Kurse
         * - Bücher
         * - YouTube-Playlists
         * - Dokumentationen
         *
         * Quellen dienen primär der Wissensdokumentation
         * und weniger als klassische Blog-Inhalte.
         */
		$sourceArguments = array(
			'label' => 'source',
			'rewrite' => array( 'slug' => 'source'),
			'menu_icon' => 'dashicons-feedback',
			'labels' => array(
				'name' => 'Quelle',
				'add_new_item' => 'Neue Quelle hinzufügen',
				'edit_item' => 'Quelle bearbeiten',
				'all_items' => 'Alle Quellen',
				'singular_name' => 'Quelle'
			),
			'menu_position' => 40
		);
		
		register_post_type('source', array_merge($common, $sourceArguments));

        /**
         * Projekte repräsentieren praktische Umsetzungen,
         * Experimente oder Lernprojekte.
         *
         * Projekte können:
         * - eigenständig sein
         * - aus Kursen entstanden sein
         * - auf Quellen referenzieren
         */
		$projectArguments = array(
			'label' => 'project',
			'rewrite' => array( 'slug' => 'project'),
			'menu_icon' => 'dashicons-portfolio',
			'labels' => array(
				'name' => 'Projekte',
				'add_new_item' => 'Neues Projekt anlegen',
				'edit_item' => 'Projekt bearbeiten',
				'all_items' => 'Alle Projekte',
				'singular_name' => 'Projekt'
			),
			'menu_position' => 30
		);
		
		register_post_type( 'project', array_merge($common, $projectArguments) );

        /**
         * Projekte repräsentieren praktische Umsetzungen,
         * Experimente oder Lernprojekte.
         *
         * Projekte können:
         * - eigenständig sein
         * - aus Kursen entstanden sein
         * - auf Quellen referenzieren
         */
		$instructorArguments = array(
			'label' => 'instructor',
			'rewrite' => array( 'slug' => 'instructor'),
			'menu_icon' => 'dashicons-id',
			'labels' => array(
				'name' => 'Dozenten',
				'add_new_item' => 'Neuen Dozenten anlegen',
				'edit_item' => 'Dozent bearbeiten',
				'all_items' => 'Alle Dozenten',
				'singular_name' => 'Dozent'
			),
			'menu_position' => 50
		);
		
		register_post_type( 'instructor', array_merge($common, $instructorArguments) );
	}
	
	add_action('init', 'fullstackdevelopment_taxonomies');
	function fullstackdevelopment_taxonomies() {
        /**
         * Technologien / Tools / Frameworks.
         *
         * Dient zur semantischen Zuordnung von:
         * - Projekten
         * - Quellen
         * - Blogartikeln
         *
         * Beispiele:
         * - WordPress
         * - PHP
         * - React
         * - Tailwind CSS
         * - Docker
         *
         * Die Taxonomie beschreibt ausschließlich Inhalte
         * und steuert keine technische Asset-Logik.
         */
        register_taxonomy( 'technology', [ 'post', 'project', 'source' ], [
            'hierarchical'      => false,

            'labels'            => [
                'name'                       => 'Technologien',
                'singular_name'              => 'Technologie',
                'search_items'               => 'Technologien durchsuchen',
                'popular_items'              => 'Beliebte Technologien',
                'all_items'                  => 'Alle Technologien',
                'edit_item'                  => 'Technologie bearbeiten',
                'view_item'                  => 'Technologie ansehen',
                'update_item'                => 'Technologie aktualisieren',
                'add_new_item'               => 'Neue Technologie hinzufügen',
                'new_item_name'              => 'Neuer Technologie-Name',
                'separate_items_with_commas' => 'Technologien mit Komma trennen',
                'add_or_remove_items'        => 'Technologien hinzufügen oder entfernen',
                'choose_from_most_used'      => 'Aus häufig verwendeten Technologien wählen',
                'menu_name'                  => 'Technologien',
            ],

            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'query_var'         => true,

            'rewrite'           => [
                'slug' => 'technology',
            ],
        ] );

        /**
         * Projektarten zur inhaltlichen Klassifizierung
         * von Projekten und Quellen.
         *
         * Dient zur Unterscheidung von:
         * - Lernprojekten
         * - Kursprojekten
         * - Kundenprojekten
         * - Experimenten
         * - eigenen Entwicklungen
         *
         * Die Taxonomie beschreibt den Charakter
         * eines Inhalts — nicht die verwendete Technologie.
         *
         * Beispiele:
         * - Lernprojekt
         * - Udemy-Kurs
         * - Kundenprojekt
         * - Proof of Concept
         * - Portfolio-Projekt
         */
        register_taxonomy(
            'project-type',
            [ 'project', 'source' ],
            [
                /**
                 * Hierarchisch wie Kategorien:
                 * Eltern-/Kind-Beziehungen möglich.
                 */
                'hierarchical' => true,

                'labels' => [
                    'name'              => 'Projektarten',
                    'singular_name'     => 'Projektart',
                    'menu_name'         => 'Projektarten',

                    'all_items'         => 'Alle Projektarten',

                    'search_items'      => 'Projektarten durchsuchen',

                    'edit_item'         => 'Projektart bearbeiten',
                    'view_item'         => 'Projektart ansehen',
                    'update_item'       => 'Projektart aktualisieren',

                    'add_new_item'      => 'Neue Projektart hinzufügen',
                    'new_item_name'     => 'Neue Projektart',

                    'parent_item'       => 'Übergeordnete Projektart',
                    'parent_item_colon' => 'Übergeordnete Projektart:',
                ],

                /**
                 * Anzeige im WordPress-Backend.
                 */
                'show_ui' => true,

                /**
                 * Eigene Spalte im Admin-Listing.
                 */
                'show_admin_column' => true,

                /**
                 * Gutenberg / REST API Unterstützung.
                 */
                'show_in_rest' => true,

                /**
                 * Aktiviert Query-Parameter.
                 */
                'query_var' => true,

                /**
                 * URL-Struktur:
                 * /project-type/lernprojekt/
                 */
                'rewrite' => [
                    'slug' => 'project-type',
                ],
            ]
        );
	}

	add_action('init', 'fullstackdevelopment_add_taxonomies_to_courses');
	function fullstackdevelopment_add_taxonomies_to_courses() {
		register_taxonomy_for_object_type( 'category', 'source' );
		register_taxonomy_for_object_type( 'category', 'project' );
		register_taxonomy_for_object_type( 'post_tag', 'source' );
		register_taxonomy_for_object_type( 'post_tag', 'project' );
	}