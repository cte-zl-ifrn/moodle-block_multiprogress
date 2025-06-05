<?php

defined('MOODLE_INTERNAL') || die();

class block_multiprogress_edit_form extends block_edit_form {

    protected function specific_definition($mform) {
        global $DB;

        // // Seção para as configurações.
        // $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

        // { // customfield_members 
        //     $customfield_members_options = [
        //         'finished' => get_string('finished', 'block_course_rating'),
        //         'in_progress' => get_string('in_progress', 'block_course_rating'),
        //     ];
        //     $mform->addElement(
        //         'select',
        //         'customfield_members',
        //         get_string('customfield_members', 'block_multiprogress'),
        //         $customfield_members_options
        //     );
        //     $mform->setDefault('customfield_members', "turma_codigo");
        //     $mform->setType('customfield_members', PARAM_RAW);
        // }

        // { // customfield_self 
        //     $customfield_self_options = [
        //         'finished' => get_string('finished', 'block_course_rating'),
        //         'in_progress' => get_string('in_progress', 'block_course_rating'),
        //     ];
        //     $mform->addElement(
        //         'select',
        //         'customfield_self',
        //         get_string('customfield_self', 'block_multiprogress'),
        //         $customfield_self_options
        //     );
        //     $mform->setDefault('customfield_self', "disciplina_sigla");
        //     $mform->setType('customfield_self', PARAM_RAW);
        // }
    }
}