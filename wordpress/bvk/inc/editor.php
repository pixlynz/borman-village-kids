<?php
/**
 * Editing screens: registers a Secure Custom Fields field group for each
 * page, so Todd can change paragraph text and photos from wp-admin without
 * touching the theme. Falls back silently if SCF/ACF isn't active.
 */

defined( 'ABSPATH' ) || exit;

/**
 * One schema entry per editable field: key, label, type (text/textarea/image)
 * and the default value baked into the theme (shown as the starting text in
 * the editor, and used on the front end until someone overrides it).
 */
function bvk_schema() {
	return array(
		'home'      => array(
			array( 'key' => 'hero_image', 'label' => 'Hero photo', 'type' => 'image' ),
			array( 'key' => 'hero_heading', 'label' => 'Hero heading', 'type' => 'text', 'default' => 'A home away from home, for your little one.' ),
			array( 'key' => 'hero_text', 'label' => 'Hero text', 'type' => 'textarea', 'default' => 'A purpose-built early learning village where your tamariki are cared for, known by name, and free to explore.' ),
			array( 'key' => 'welcome_text', 'label' => '"Our village" paragraph', 'type' => 'textarea', 'default' => "Somewhere your child feels safe and settled, and somewhere you do too.\n\nWe are a small community of tamariki, whānau and kaiako. We take the time to know your family and reflect your hopes for your child. Our door is always open." ),
			array( 'key' => 'welcome_image', 'label' => '"Our village" photo', 'type' => 'image' ),
			array( 'key' => 'pillars_intro', 'label' => '"What matters to us" intro', 'type' => 'textarea', 'default' => 'Small choices, made with care every day, from the kai on the table to the people in the room.' ),
			array( 'key' => 'pillar_kai_image', 'label' => 'Kai card photo', 'type' => 'image' ),
			array( 'key' => 'pillar_kai_text', 'label' => 'Kai card text', 'type' => 'textarea', 'default' => 'Morning tea, lunch and afternoon tea, cooked fresh here each day. Organic where we can, and every dietary need catered for.' ),
			array( 'key' => 'pillar_curriculum_image', 'label' => 'Te Whāriki card photo', 'type' => 'image' ),
			array( 'key' => 'pillar_curriculum_text', 'label' => 'Te Whāriki card text', 'type' => 'textarea', 'default' => "Aotearoa's early childhood curriculum, weaving care and learning together so children grow into confident learners." ),
			array( 'key' => 'pillar_teachers_image', 'label' => 'Teachers card photo', 'type' => 'image' ),
			array( 'key' => 'pillar_teachers_text', 'label' => 'Teachers card text', 'type' => 'textarea', 'default' => 'Every teacher in our required ratio is fully qualified. We add more on top too, primary-trained and in training, so there is always time for your child.' ),
			array( 'key' => 'story_text', 'label' => '"Purpose built, by us" paragraph', 'type' => 'textarea', 'default' => "We designed our centre ourselves, with classrooms shaped to each age and spaces that exceed the Ministry's requirement for room per child.\n\nInside and out, we use natural materials and leave plenty of room to explore, dig, build and rest." ),
			array( 'key' => 'storypark_text', 'label' => '"Stay close, every day" paragraph', 'type' => 'textarea', 'default' => "We record your child's learning through Storypark, a secure online space where we share photos, stories and progress, privately with you.\n\nLocal walks and excursions are part of our curriculum, and our open-door policy means you are welcome any time." ),
			array( 'key' => 'storypark_image', 'label' => '"Stay close, every day" photo', 'type' => 'image' ),
		),
		'about'     => array(
			array( 'key' => 'hero_image', 'label' => 'Hero photo', 'type' => 'image' ),
			array( 'key' => 'intro_lead', 'label' => 'Intro paragraph', 'type' => 'textarea', 'default' => "We have a community where parents and children feel supported and can thrive, where you have a voice and we reflect your family's values and hopes." ),
			array( 'key' => 'family_text', 'label' => '"Family focus" paragraph', 'type' => 'textarea', 'default' => "Our owner is a father of four and has been a centre owner-operator since May 2000. That experience shapes everything here.\n\nBorman Village Kids is decades of learning about what helps children, and families, feel settled, safe and ready to thrive." ),
			array( 'key' => 'family_image', 'label' => '"Family focus" photo', 'type' => 'image' ),
			array( 'key' => 'purpose_text', 'label' => '"Purpose-built design" paragraph', 'type' => 'textarea', 'default' => "We designed our centre ourselves, with classrooms shaped to the developmental needs of each age.\n\nWe focus on infant care, toddler transitions and preschool, in calm, natural spaces that exceed the Ministry's requirement for room per child." ),
			array( 'key' => 'purpose_image', 'label' => '"Purpose-built design" photo', 'type' => 'image' ),
			array( 'key' => 'curriculum_text', 'label' => '"Our curriculum" paragraph', 'type' => 'textarea', 'default' => "Our programme is based on Te Whāriki, New Zealand's early childhood curriculum, weaving care and education through planned and everyday moments.\n\nThose moments build the knowledge, skills and attitudes that grow confident, capable learners." ),
			array( 'key' => 'curriculum_image', 'label' => '"Our curriculum" photo', 'type' => 'image' ),
			array( 'key' => 'opendoor_text', 'label' => '"Our promise to you" paragraph', 'type' => 'textarea', 'default' => "We have an open-door policy. Whānau are welcome to visit, share, and be part of the day, as much as they like.\n\nWe share your child's learning through Storypark, a secure online portfolio, privately with your family." ),
		),
		'team'      => array(
			array( 'key' => 'hero_image', 'label' => 'Hero photo', 'type' => 'image' ),
			array( 'key' => 'intro_lead', 'label' => 'Intro paragraph', 'type' => 'textarea', 'default' => 'Every centre has to meet a required minimum ratio of adults to children. We take it a step further: every teacher who counts towards our ratio is a fully qualified early childhood educator, which is not always the case.' ),
			array( 'key' => 'intro_image', 'label' => 'Intro photo', 'type' => 'image' ),
			array( 'key' => 'expect_image', 'label' => '"What you can expect" photo', 'type' => 'image' ),
			array( 'key' => 'owner_text', 'label' => '"From our owner" paragraph', 'type' => 'textarea', 'default' => 'Borman Village Kids reflects everything we have learnt over our years in early childhood, and what we believe is best practice. It is built to be a community where children and parents feel comfortable, supported, and able to thrive.' ),
		),
		'enrolment' => array(
			array( 'key' => 'hero_image', 'label' => 'Hero photo', 'type' => 'image' ),
			array( 'key' => 'storypark_text', 'label' => '"A window into your child\'s days" paragraph', 'type' => 'textarea', 'default' => "We record your child's learning through Storypark, a secure online space, shared privately with you as it happens.\n\nLocal walks and excursions are part of our curriculum, and our open-door policy means you are welcome any time." ),
			array( 'key' => 'storypark_image', 'label' => '"A window into your child\'s days" photo', 'type' => 'image' ),
		),
		'contact'   => array(
			array( 'key' => 'hero_image', 'label' => 'Hero photo', 'type' => 'image' ),
			array( 'key' => 'intro_lead', 'label' => 'Intro paragraph', 'type' => 'textarea', 'default' => 'The best way to know is to come and see us. Make an enquiry and we will arrange a time that suits.' ),
			array( 'key' => 'contact_image', 'label' => 'Photo', 'type' => 'image' ),
			array( 'key' => 'opendoor_text', 'label' => '"Our open-door policy" paragraph', 'type' => 'textarea', 'default' => 'We have an open-door policy. Families are welcome to be involved as much as they like.\n\nDrop in to see the space, share a morning, or simply say kia ora. You and your tamariki are part of our community.' ),
		),
	);
}

add_action(
	'acf/init',
	static function () {
		if ( ! function_exists( 'acf_add_local_field_group' ) ) {
			return;
		}
		foreach ( bvk_schema() as $view => $fields ) {
			$page_id = bvk_page_id( $view );
			if ( ! $page_id ) {
				continue;
			}
			$acf_fields = array();
			foreach ( $fields as $f ) {
				$field = array(
					'key'   => 'field_bvk_' . $view . '_' . $f['key'],
					'name'  => $f['key'],
					'label' => $f['label'],
					'type'  => 'image' === $f['type'] ? 'image' : $f['type'],
				);
				if ( 'image' === $f['type'] ) {
					$field['return_format'] = 'array';
					$field['preview_size']  = 'medium';
				} else {
					$field['default_value'] = $f['default'] ?? '';
				}
				$acf_fields[] = $field;
			}
			acf_add_local_field_group(
				array(
					'key'      => 'group_bvk_' . $view,
					'title'    => 'Page content',
					'fields'   => $acf_fields,
					'location' => array(
						array(
							array(
								'param'    => 'page',
								'operator' => '==',
								'value'    => $page_id,
							),
						),
					),
				)
			);
		}
	}
);
