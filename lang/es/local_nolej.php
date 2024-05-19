<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for local_nolej
 *
 * @package     local_nolej
 * @author      2024 Vincenzo Padula <vincenzo@oc-group.eu>
 * @copyright   2024 OC Open Consulting SB Srl
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Plugin
$string['pluginname'] = 'Nolej';
$string['nolej:usenolej'] = 'Crear actividades con Nolej';

// Settings
$string['apikey'] = 'Clave de API';
$string['apikeyinfo'] = 'Tu clave de API de Nolej.';
$string['apikeymissing'] = 'Falta la clave de API de Nolej. Debes configurarla en la configuración del plugin.';

// Manage
$string['library'] = 'Biblioteca de Nolej';
$string['modules'] = 'Tus módulos de Nolej';
$string['status'] = 'Estado';
$string['created'] = 'Creado';
$string['lastupdate'] = 'Última actualización';
$string['editmodule'] = 'Editar';
$string['createmodule'] = 'Crear un nuevo módulo de Nolej';
$string['deletemodule'] = 'Eliminar';
$string['deletemoduledescription'] = '¿Estás seguro de que deseas eliminar este módulo de Nolej?';
$string['moduledeleted'] = 'El módulo de Nolej ha sido eliminado.';
$string['action'] = 'Acción';
$string['documentinfo'] = 'Información del módulo';
$string['genericerror'] = 'Se produjo un error: <pre>{$a->error}</pre>';
$string['moduleview'] = 'Ver módulo';

// Status
$string['status_0'] = 'Nuevo módulo';
$string['status_1'] = 'Transcripción en progreso';
$string['status_2'] = 'Transcripción completada';
$string['status_3'] = 'Análisis en progreso';
$string['status_4'] = 'Análisis completado';
$string['status_5'] = 'Revisión en progreso';
$string['status_6'] = 'Revisión completada';
$string['status_7'] = 'Generación de actividades en progreso';
$string['status_8'] = 'Actividades generadas';
$string['status_9'] = 'Error';

// Notifications
$string['eventwebhookcalled'] = 'El webhook de Nolej ha sido llamado.';
$string['messageprovider:transcription_ok'] = 'Transcripción completada';
$string['messageprovider:transcription_ko'] = 'Error en la transcripción';
$string['messageprovider:analysis_ok'] = 'Análisis completado';
$string['messageprovider:analysis_ko'] = 'Error en el análisis';
$string['messageprovider:activities_ok'] = 'Actividades generadas';
$string['messageprovider:activities_ko'] = 'Error en la generación de actividades';
$string['action_transcription_ok'] = 'La transcripción está lista';
$string['action_transcription_ok_body'] = 'La transcripción del documento "{$a->title}" se ha completado el {$a->tstamp}, ahora puedes revisarla y comenzar el análisis.';
$string['action_transcription_ko'] = 'Error en la transcripción';
$string['action_transcription_ko_body'] = 'Lamentablemente, la transcripción del documento "{$a->title}" falló el {$a->tstamp}. Mensaje de error: {$a->errormessage}';
$string['action_analysis_ok'] = 'El análisis está listo';
$string['action_analysis_ok_body'] = 'El análisis del documento "{$a->title}" se ha completado el {$a->tstamp}, ahora puedes revisarlo.';
$string['action_analysis_ko'] = 'Error en el análisis';
$string['action_analysis_ko_body'] = 'Lamentablemente, el análisis del documento "{$a->title}" falló el {$a->tstamp}. Mensaje de error: {$a->errormessage}';
$string['action_activities_ok'] = 'Actividades generadas con éxito';
$string['action_activities_ok_body'] = 'Las actividades del documento "{$a->title}" se han generado el {$a->tstamp}.';
$string['action_activities_ko'] = 'Error en la generación de actividades';
$string['action_activities_ko_body'] = 'Lamentablemente, la generación de actividades del documento "{$a->title}" falló el {$a->tstamp}. Mensaje de error: {$a->errormessage}';

// Creation
$string['title'] = 'Título';
$string['titledesc'] = 'Elige un título o déjalo en blanco y Nolej elegirá uno por ti.';
$string['source'] = 'Fuente';
$string['sourcetype'] = 'Tipo de fuente';
$string['sourcetypefile'] = 'Archivo';
$string['sourcetypeweb'] = 'Recurso web';
$string['sourcetypetext'] = 'Escribir texto directamente';
$string['sourcefile'] = 'Archivo';
$string['sourceurl'] = 'URL web';
$string['sourceurldesc'] = 'Escribe una URL';
$string['sourceurltype'] = 'Tipo de contenido';
$string['sourcefreetext'] = 'Texto';
$string['sourcedocument'] = 'Documento';
$string['sourceaudio'] = 'Audio';
$string['sourcevideo'] = 'Vídeo';
$string['sourceweb'] = 'Contenido web';
$string['language'] = 'Idioma del contenido';
$string['languagedesc'] = 'Elegir el idioma correcto del contenido ayuda a Nolej a analizarlo mejor.';
$string['create'] = 'Crear módulo';
$string['modulenotcreated'] = 'Módulo no creado';
$string['modulecreated'] = 'Módulo creado, transcripción en progreso...';
$string['modulenotfound'] = 'Módulo no encontrado';
$string['errdocument'] = 'Se produjo un error durante la creación del módulo de Nolej:<br><pre>{$a}</pre><br>Por favor, inténtalo de nuevo o ponte en contacto con un administrador si este error persiste.';

// Content limits
$string['limitcontent'] = 'Limitaciones de contenido';
$string['limitaudio'] = 'Límites de audio';
$string['limitvideo'] = 'Límites de vídeo';
$string['limitdoc'] = 'Límites del documento';
$string['limitmaxduration'] = 'Duración máxima';
$string['limitmaxpages'] = 'Número máximo de páginas';
$string['limitmaxsize'] = 'Tamaño máximo del archivo';
$string['limitmincharacters'] = 'Caracteres mínimos';
$string['limitmaxcharacters'] = 'Caracteres máximos';
$string['limittype'] = 'Tipos permitidos';

// Analysis
$string['analyze'] = 'Iniciar análisis';
$string['analysisconfirm'] = 'Advertencia: ¿Has revisado minuciosamente la transcripción antes de continuar? Una vez que comience el análisis, no se pueden realizar modificaciones. Por favor, asegúrate de la precisión antes de continuar.';
$string['transcription'] = 'Transcripción';
$string['missingtranscription'] = 'Transcripción faltante';
$string['analysisstart'] = 'Análisis iniciado';
$string['cannotwritetranscription'] = 'No se puede guardar la transcripción en el disco, por favor, ponte en contacto con un administrador si este error persiste.';

// Summary
$string['savesummary'] = 'Guardar resumen';
$string['summary'] = 'Resumen';
$string['abstract'] = 'Resumen';
$string['keypoints'] = 'Puntos clave';
$string['cannotwritesummary'] = 'No se puede guardar el resumen en el disco, por favor, ponte en contacto con un administrador si este error persiste.';
$string['summarynotsaved'] = 'No se pudo actualizar el resumen. Por favor, ponte en contacto con un administrador si este error persiste.';
$string['summarysaved'] = 'El resumen se ha guardado.';

// Questions
$string['questions'] = 'Preguntas';
$string['savequestions'] = 'Guardar preguntas';
$string['questionssaved'] = 'Preguntas guardadas.';
$string['questionsnotsaved'] = 'No se pudo actualizar las preguntas. Por favor, ponte en contacto con un administrador si este error persiste.';
$string['cannotwritequestions'] = 'No se pueden guardar las preguntas en el disco, por favor, ponte en contacto con un administrador si este error persiste.';
$string['questionn'] = 'Pregunta n.º{$a}';
$string['question'] = 'Pregunta';
$string['questiontype'] = 'Tipo de pregunta';
$string['questiontypeopen'] = 'Respuesta abierta';
$string['questiontypeftb'] = 'Completar los espacios en blanco';
$string['questiontypetf'] = 'Verdadero o falso';
$string['questiontypemcq'] = 'Pregunta de opción múltiple';
$string['questiontypehoq'] = 'Pregunta de alto nivel';
$string['questionenable'] = 'Habilitar pregunta';
$string['questionuseforgrading'] = 'Usar para calificación';
$string['questionanswer'] = 'Respuesta';
$string['questionanswertrue'] = 'Declaración correcta';
$string['questionanswerfalse'] = 'Declaración falsa';
$string['questiondistractor'] = 'Distractor';
$string['questionusedistractor'] = 'Declaración a mostrar';

// Concepts
$string['concepts'] = 'Conceptos';
$string['saveconcepts'] = 'Guardar conceptos';
$string['cannotwriteconcepts'] = 'No se pueden guardar los conceptos en el disco, por favor, ponte en contacto con un administrador si este error persiste.';
$string['conceptssaved'] = 'Conceptos guardados.';
$string['conceptsnotsaved'] = 'No se pudo actualizar los conceptos. Por favor, ponte en contacto con un administrador si este error persiste.';
$string['conceptenable'] = 'Habilitado';
$string['conceptlabel'] = 'Etiqueta';
$string['conceptdefinition'] = 'Definición';
$string['conceptuseforgaming'] = 'Usar para juegos';
$string['conceptuseforcw'] = 'Palabras cruzadas';
$string['conceptuseforftw'] = 'Encontrar la palabra';
$string['conceptusefordtw'] = 'Arrastrar la palabra';
$string['conceptuseingames'] = 'Juegos disponibles';
$string['conceptuseforpractice'] = 'Usar para práctica';

// Activities
$string['settings'] = 'Generar';
$string['activities'] = 'Vista previa';
$string['generate'] = 'Generar actividades';
$string['activitiescrossword'] = 'Palabras cruzadas';
$string['activitiescwwords'] = 'Define cuántas palabras usar en la actividad de palabras cruzadas';
$string['activitiesdragtheword'] = 'Arrastrar la palabra';
$string['activitiesdtwwords'] = 'Define cuántas palabras usar en la actividad de Arrastrar la Palabra';
$string['activitiesfindtheword'] = 'Encontrar la palabra';
$string['activitiesflashcardsflashcards'] = 'Define cuántas tarjetas deben aparecer en la actividad de evaluación conceptual';
$string['activitiesftwwords'] = 'Define cuántas palabras usar en la actividad Encontrar la Palabra';
$string['activitiesglossary'] = 'Glosario';
$string['activitiesgrade'] = 'Evaluación conceptual';
$string['activitiesgradequestions'] = 'Define cuántas preguntas deben aparecer en la actividad de evaluación conceptual';
$string['activitiesgradeq'] = 'Evaluación contextual';
$string['activitiesgradeqquestions'] = 'Define cuántas preguntas deben aparecer en la actividad de evaluación contextual';
$string['activitieshoquestions'] = 'Preguntas de alto nivel';
$string['activitiesibook'] = 'Libro interactivo';
$string['activitiesivideo'] = 'Vídeo interactivo';
$string['activitiesivideoquestions'] = 'Define cuántas preguntas deben proponerse por conjunto en la actividad de Vídeo Interactivo. Hay 2 conjuntos: uno en el medio del vídeo, otro al final del vídeo';
$string['activitiesivideosummary'] = 'Define si se agregará un resumen al final de la actividad de Vídeo Interactivo';
$string['activitiespractice'] = 'Tarjetas de memoria conceptuales';
$string['activitiespracticeflashcards'] = 'Define cuántas preguntas deben aparecer en la actividad de tarjetas de memoria conceptuales';
$string['activitiespracticeq'] = 'Tarjetas de memoria contextual';
$string['activitiespracticeqflashcards'] = 'Define cuántas preguntas deben aparecer en la actividad de tarjetas de memoria contextual';
$string['activitiesselect'] = 'Seleccionar una actividad';
$string['activitiesselected'] = 'Actividad de Nolej: %s del módulo "%s".';
$string['activitiessummary'] = 'Resumen';
$string['activitiesuseinibook'] = 'Usar esta actividad en el libro interactivo';
$string['activitiesenable'] = 'Generar {$a}';
$string['minvalue'] = 'Valor mínimo';
$string['maxvalue'] = 'Valor máximo';
$string['cannotwritesettings'] = 'No se pueden guardar las configuraciones en el disco, por favor, ponte en contacto con un administrador si este error persiste.';
$string['settingsnotsaved'] = 'No se pudo actualizar las configuraciones. Por favor, ponte en contacto con un administrador si este error persiste.';
$string['generationstarted'] = 'Generación iniciada';
$string['erractivitiesdecode'] = 'Error al decodificar los datos de actividades';
$string['erractivitydownload'] = 'Error al guardar la actividad en el disco';
$string['errh5psave'] = 'Error al guardar el paquete h5p';
$string['errh5pvalidation'] = 'El paquete h5p no es válido';
